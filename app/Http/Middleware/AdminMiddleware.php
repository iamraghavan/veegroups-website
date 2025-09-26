<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // First check if the user is authenticated
        if (Auth::check()) {
            // Then check if the user is an admin
            if (Auth::user()->role !== 'admin') {
                return redirect('/'); // Or redirect to a custom "not authorized" page
            }
        } else {
            // If the user is not authenticated, redirect to login page
            return redirect('/login');
        }

        return $next($request);
    }
}