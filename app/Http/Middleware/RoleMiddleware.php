<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    // dipanggil lewat route: ->middleware('role:admin,petugas')
    // $roles berisi daftar role yang diizinkan (admin, petugas)
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        // belum login -> arahkan ke halaman login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // sudah login tapi role tidak termasuk yang diizinkan -> tolak (403)
        if (!in_array(Auth::user()->role, $roles)) {
            abort(403, 'Anda tidak punya hak akses untuk halaman ini.');
        }

        return $next($request);
    }
}
