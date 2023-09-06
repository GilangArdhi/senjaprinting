<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
            if (Auth::user()->isAdminRestoran() && $role === 'admin') {
                return $next($request);
            }
            if (Auth::user()->isPelanggan() && $role === 'pelanggan') {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized');
    }
}
