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
        if (Auth::check()) {
            if(Auth::user()->role == 'Admin'){
                return $next($request);
            }
          
        }else{
            return redirect()->route('login')->with('pesan', 'Acces denied. Youare not an admin');
        }
         
        return redirect('/login');
    }
}
