<?php

// bootstrap/app.php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\SetLocale; // Importar la clase del Middleware

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Añádelo al grupo de Middleware 'web' (el que maneja la sesión)
        $middleware->web(append: [
            SetLocale::class, // <-- ¡Añade esto!
        ]);

        // Si tu aplicación tiene rutas 'api' o 'sanctum', puedes añadirlo allí si es necesario.
        // $middleware->api(append: [
        //     \App\Http\Middleware\SetLocale::class,
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();