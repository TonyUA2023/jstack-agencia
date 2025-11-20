<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Obtener el locale de la sesión, o usar 'es' por defecto
        $locale = Session::get('locale', 'es');
        
        // 2. Validar que el locale sea permitido
        if (! in_array($locale, ['es', 'en'])) {
            $locale = 'es';
        }

        // 3. Establecer el idioma de la aplicación
        App::setLocale($locale);

        return $next($request);
    }
}