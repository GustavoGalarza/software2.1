<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!auth()->check()) {
            return redirect('/login'); // Redirige al inicio de sesión si el usuario no está autenticado.
        }

        foreach ($roles as $role) {
            if ($request->user()->hasRole($role)) {
                return $next($request);
            }
        }

        // Si no tiene el rol necesario
        Session::flash('error', 'No tienes el rol necesario para ver este contenido.');
        return redirect('/home');
    }
}
