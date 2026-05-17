<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next,  ...$role): Response
    {
        if (in_array($request->user()->role, $role)) {
            return $next($request);
        }
        return redirect()->route($role . '.login')->with('error', 'Anda harus login sebagai ' . $role . ' untuk mengakses halaman ini.');
    }
}