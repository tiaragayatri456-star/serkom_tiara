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
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('pesan', 'Silakan login dulu.');
        }

        if (Auth::user()->role !== $role) {
            return redirect()->route('login')->withErrors(['login' => 'Akses ditolak. Anda bukan ' . $role]);
        }

        return $next($request);
    }
}
