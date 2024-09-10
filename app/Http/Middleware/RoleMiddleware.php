<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan Auth digunakan

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek apakah user sudah login
        if (Auth::check() && Auth::user()->hak_akses === Admin) {
            return $next($request);
        }

        // Jika tidak memiliki akses, redirect ke halaman yang diinginkan dengan pesan error
        return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses.');
    }
}