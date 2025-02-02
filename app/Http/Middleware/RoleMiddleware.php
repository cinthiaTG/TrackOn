<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->rol !== $role) {
            abort(403, 'No tienes permisos para acceder a esta página.');
        }
        return $next($request);
    }
}
