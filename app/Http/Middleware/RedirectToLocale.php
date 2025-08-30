<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Only redirect if path is exactly "/"
        if ($request->path() === '/') {
            $browserLang = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
            $supported = ['en', 'fr', 'ta', 'hi']; // customize as needed
            $locale = in_array($browserLang, $supported) ? $browserLang : 'en';

            return redirect("/{$locale}");
        }

        return $next($request);
    }
}
