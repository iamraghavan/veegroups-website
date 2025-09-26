<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;

class CertificationController extends Controller
{
    private string $basePath = 'assets/img/jve/docs';

    private array $allowedFiles = [
        'GST_Certificate.pdf',
        'ISO__JAY_VEE_ENGINEERING.pdf',
        'Print_Udyam_Registration_Certificate.pdf',
    ];

    private function filePath(string $file): ?string
    {
        if (!in_array($file, $this->allowedFiles)) {
            return null;
        }
        $path = public_path($this->basePath . '/' . $file);
        return file_exists($path) ? $path : null;
    }

    public function view(Request $request, string $file)
    {
        $path = $this->filePath($file);
        if (!$path) {
            abort(404);
        }
        return response()->file($path);
    }

    public function download(Request $request, string $file)
    {
        $path = $this->filePath($file);
        if (!$path) {
            abort(404);
        }
        return response()->download($path, $file);
    }

    // Helper for generating signed URLs (you can also put in blade directly)
    public static function signedUrl(string $route, string $file): string
    {
        return URL::signedRoute($route, ['file' => $file]);
    }
}
