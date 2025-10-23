<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Throwable;

/**
 * CertificationController
 *
 * Industrial Coding Standards & Guidelines:
 * - Strict types + PSR-12 formatting
 * - Defense-in-depth error handling and audit logging
 * - Production-safe error reporting (generic to users)
 * - Case-insensitive brochure lookup; serves only files that actually exist
 * - Enforces signed URLs (optionally expiring)
 * - Security headers on all responses
 */
final class CertificationController extends Controller
{
    /**
     * Folder under /public where PDFs live.
     * Example: public/assets/img/jve/docs
     */
    private string $baseRel = 'assets/img/jve/docs';

    /** @var string[] Allowed file extensions (lowercase). Restrict to safe types. */
    private array $allowedExtensions = ['pdf'];

    /** Require signed URLs for view/download. */
    private bool $requireSigned = true;

    /**
     * Serve inline (view) — uses proper headers and CSP.
     */
    public function view(Request $request, string $file): HttpResponse|BinaryFileResponse
    {
        if ($this->requireSigned && ! $request->hasValidSignature()) {
            Log::warning('Certification view: invalid or missing signature', [
                'file_param' => $file,
                'ip'         => $request->ip(),
            ]);
            abort(403, 'Forbidden');
        }

        try {
            [$abs, $downloadName, $ext] = $this->resolveExistingFile($file);

            // PDFs can be viewed inline safely with nosniff; (SVG would be forced attachment, but we don't allow SVG here).
            $mime = $this->guessMime($downloadName, $ext) ?? 'application/pdf';

            $response = Response::file($abs, $this->securityHeaders($mime, 'inline', $downloadName));
            $this->applyPrivateCaching($response);

            return $response;
        } catch (FileNotFoundException) {
            Log::notice('Certification view: file not found', ['requested' => $file]);
            abort(404);
        } catch (Throwable $e) {
            Log::error('Certification view: unexpected error', [
                'exception' => $e,
                'requested' => $file,
            ]);
            abort(500, 'Something went wrong while serving the file.');
        }
    }

    /**
     * Serve as download (attachment).
     */
    public function download(Request $request, string $file): HttpResponse|BinaryFileResponse
    {
        if ($this->requireSigned && ! $request->hasValidSignature()) {
            Log::warning('Certification download: invalid or missing signature', [
                'file_param' => $file,
                'ip'         => $request->ip(),
            ]);
            abort(403, 'Forbidden');
        }

        try {
            [$abs, $downloadName, $ext] = $this->resolveExistingFile($file);

            $mime = $this->guessMime($downloadName, $ext) ?? 'application/pdf';

            $response = Response::download($abs, $downloadName, $this->securityHeaders($mime, 'attachment', $downloadName));
            // Laravel adds Content-Disposition for download; we still add security headers.
            $this->applyPrivateCaching($response);

            return $response;
        } catch (FileNotFoundException) {
            Log::notice('Certification download: file not found', ['requested' => $file]);
            abort(404);
        } catch (Throwable $e) {
            Log::error('Certification download: unexpected error', [
                'exception' => $e,
                'requested' => $file,
            ]);
            abort(500, 'Something went wrong while serving the file.');
        }
    }

    /**
     * Helper for generating signed URLs.
     * Example:
     *   CertificationController::signedUrl('certifications.view', 'JAY_VEE_BROUCHER.pdf');
     *
     * @param string $route Route name
     * @param string $file  Raw file name provided by your Blade (any case/spacing)
     * @param int    $ttlSeconds Link TTL in seconds (0 => non-expiring signature)
     */
    public static function signedUrl(string $route, string $file, int $ttlSeconds = 1800): string
    {
        // Use a temporary signature by default (30 minutes). Pass 0 for a non-expiring signature.
        if ($ttlSeconds > 0) {
            return URL::temporarySignedRoute($route, now()->addSeconds($ttlSeconds), ['file' => $file]);
        }

        return URL::signedRoute($route, ['file' => $file]);
    }

    // ─────────────────────────────────────────────────────────────────────────────
    // Internals
    // ─────────────────────────────────────────────────────────────────────────────

    /**
     * Resolve the actual file on disk in a case-insensitive way, but only within the allowed
     * directory and with allowed extension.
     *
     * @return array{0:string,1:string,2:string} [$absolutePath, $downloadName, $extLower]
     * @throws FileNotFoundException if not found or invalid
     */
    private function resolveExistingFile(string $inputName): array
    {
        $publicBase = public_path($this->baseRel);

        if (!is_dir($publicBase)) {
            Log::error('Certification directory missing', ['dir' => $publicBase]);
            throw new FileNotFoundException('Directory not found.');
        }

        // sanitize & normalize input: we only use the basename the user gave us
        $raw      = trim(urldecode($inputName));
        $basename = pathinfo($raw, PATHINFO_BASENAME); // strip any path attempts
        $ext      = strtolower((string) pathinfo($basename, PATHINFO_EXTENSION));
        $nameOnly = (string) pathinfo($basename, PATHINFO_FILENAME);

        if ($basename === '' || $nameOnly === '' || !in_array($ext, $this->allowedExtensions, true)) {
            throw new FileNotFoundException('Invalid file.');
        }

        // Build a case-insensitive index of current PDFs in the folder
        $map = $this->scanPdfIndex($publicBase);

        // Try exact case-insensitive match
        $key = strtolower($basename);
        if (isset($map[$key])) {
            $real = $map[$key];
            $abs  = $publicBase . DIRECTORY_SEPARATOR . $real;

            if (!is_file($abs)) {
                throw new FileNotFoundException('Missing file.');
            }

            // Use a clean download name (keep original name but normalize quotes/newlines)
            $downloadName = $this->cleanDownloadName($real);

            return [$abs, $downloadName, $ext];
        }

        // Also try forgiving common BROCHURE/BROUCHER typos if needed
        $altCandidates = $this->brochureAlternates($nameOnly, $ext);
        foreach ($altCandidates as $alt) {
            $k = strtolower($alt);
            if (isset($map[$k])) {
                $real = $map[$k];
                $abs  = $publicBase . DIRECTORY_SEPARATOR . $real;

                if (!is_file($abs)) {
                    break; // continue searching
                }

                $downloadName = $this->cleanDownloadName($real);

                Log::info('Certification resolved alternate filename', [
                    'requested'  => $basename,
                    'resolved'   => $real,
                ]);

                return [$abs, $downloadName, $ext];
            }
        }

        // As a last resort, if the folder contains *one* PDF, serve it.
        // (Comment out this block if you prefer strict name matching.)
        if (count($map) === 1) {
            $onlyReal = reset($map);
            $abs      = $publicBase . DIRECTORY_SEPARATOR . $onlyReal;

            if (is_file($abs)) {
                $downloadName = $this->cleanDownloadName($onlyReal);

                Log::info('Certification fallback to single available PDF', [
                    'requested' => $basename,
                    'resolved'  => $onlyReal,
                ]);

                return [$abs, $downloadName, strtolower((string) pathinfo($onlyReal, PATHINFO_EXTENSION))];
            }
        }

        throw new FileNotFoundException('File not found.');
        // (We handle with generic 404 in caller.)
    }

    /**
     * Build a lowercase->realname map of PDFs inside the directory.
     *
     * @return array<string,string>
     */
    private function scanPdfIndex(string $dir): array
    {
        $files = @scandir($dir);
        $out   = [];

        if ($files === false) {
            return $out;
        }

        foreach ($files as $f) {
            if ($f === '.' || $f === '..') {
                continue;
            }
            $abs = $dir . DIRECTORY_SEPARATOR . $f;
            if (!is_file($abs)) {
                continue;
            }

            $ext = strtolower((string) pathinfo($f, PATHINFO_EXTENSION));
            if (!in_array($ext, $this->allowedExtensions, true)) {
                continue; // ignore non-PDFs
            }

            $out[strtolower($f)] = $f;
        }

        return $out;
    }

    /**
     * Generate alternate brochure filenames to gracefully handle common typos and spacing.
     * Example: "JAY_VEE_BROUCHER" → tries "JAY VEE BROCHURE.pdf", "JAY_VEE_BROCHURE.pdf", etc.
     *
     * @return string[] candidate basenames including extension
     */
    private function brochureAlternates(string $nameOnly, string $ext): array
    {
        $plain = str_replace(['_', '-'], ' ', $nameOnly);
        $tight = str_replace(' ', '_', $plain);

        // common typo BROUCHER -> BROCHURE
        $fixA  = str_ireplace('broucher', 'brochure', $plain);
        $fixB  = str_ireplace('broucher', 'brochure', $tight);

        // Build candidates with extension
        $candidates = [
            "{$plain}.{$ext}",
            "{$tight}.{$ext}",
            "{$fixA}.{$ext}",
            "{$fixB}.{$ext}",
            'brochure.' . $ext,
            'company profile.' . $ext,
        ];

        // Deduplicate (case-insensitive)
        $out = [];
        $seen = [];
        foreach ($candidates as $c) {
            $k = strtolower($c);
            if (!isset($seen[$k])) {
                $out[] = $c;
                $seen[$k] = true;
            }
        }

        return $out;
    }

    /**
     * Minimal MIME guess (we only allow PDFs here).
     */
    private function guessMime(string $downloadName, string $extLower): ?string
    {
        if ($extLower === 'pdf') {
            return 'application/pdf';
        }

        // Extend here if you later allow more safe types:
        // if ($extLower === 'txt') return 'text/plain';
        // …

        return null;
    }

    /**
     * Security headers for binary/file responses.
     *
     * @return array<string,string>
     */
    private function securityHeaders(string $mime, string $disposition, string $downloadName): array
    {
        // Sanitize filename for headers
        $ascii = preg_replace('/[^\x20-\x7E]/', '_', $downloadName) ?: 'file';
        $utf8  = rawurlencode($downloadName);

        return [
            'Content-Type'            => $mime,
            'Content-Disposition'     => $disposition . '; filename="' . $ascii . '"; filename*=UTF-8\'\'' . $utf8,
            'X-Content-Type-Options'  => 'nosniff',
            'X-Frame-Options'         => 'DENY',
            'Referrer-Policy'         => 'no-referrer',
            'X-Download-Options'      => 'noopen',
            // Tight CSP for file delivery
            'Content-Security-Policy' => "default-src 'none'; frame-ancestors 'self'; plugin-types application/pdf",
            'Permissions-Policy'      => 'interest-cohort=()',
        ];
    }

    /**
     * Cache policy (private; browsers can re-use for a short time).
     */
    private function applyPrivateCaching(HttpResponse|BinaryFileResponse $response): void
    {
        $maxAge = (int) config('secure_assets.private_max_age', 300);
        $response->headers->set('Cache-Control', 'private, max-age=' . $maxAge);
        $response->headers->set('Pragma', 'private');
    }

    /**
     * Clean unsafe characters from the download filename while keeping the original look.
     */
    private function cleanDownloadName(string $real): string
    {
        $name = Str::of($real)->replace(["\r", "\n", '"'], '');
        return (string) $name;
    }
}