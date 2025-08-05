<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        //  Kalau belum login (session habis), redirect ke login
        if (!Auth::check()) {
            return redirect()->route('login')->with('session_expired', true);
        }

        //  Kalau sudah login, baru cek role-nya
        if (Auth::user()->role === $role) {
            return $next($request);
        }

        //  Role tidak sesuai, tolak akses
        abort(403, 'tidak diizinkan mengakses halaman ini');
    }
}
