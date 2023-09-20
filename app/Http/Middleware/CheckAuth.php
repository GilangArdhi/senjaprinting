<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAuth
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            // Pengguna sudah login, tampilkan link "Logout"
            view()->share('showLogoutLink', true);
        } else {
            // Pengguna belum login, tampilkan link "Login"
            view()->share('showLoginLink', true);
        }

        return $next($request);
    }
}
