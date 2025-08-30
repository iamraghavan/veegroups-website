<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->route('locale');

        if ($locale && preg_match('/^[a-z]{2}$/', $locale)) {
            App::setLocale($locale);
            Session::put('locale', $locale);
            setlocale(LC_ALL, $locale);
        }

        return $next($request);
    }
}
