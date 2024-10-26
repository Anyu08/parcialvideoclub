<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Redirigir a la página de login si no está autenticado
        if (!$request->expectsJson()) {
            return route('login'); // Asegúrate de que esta ruta exista en tus rutas.
        }

        // Si la solicitud espera JSON, no se redirige.
        return null;
    }
}
