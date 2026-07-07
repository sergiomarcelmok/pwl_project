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
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Belum login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Cek apakah role user ada di daftar role yang diizinkan
        if (!in_array(Auth::user()->role, $roles)) {
            abort(403, 'Anda tidak memiliki hak akses.');
        }

        return $next($request);
    }
}