<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Import Auth facade
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role)
    {
        // Check if the user is authenticated and has the correct role
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);  // Allow the request to proceed
        }

        // If not authorized, abort with a 403 error
        abort(403, 'Unauthorized');
    }
}
