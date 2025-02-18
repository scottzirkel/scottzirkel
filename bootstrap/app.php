<?php

use Spatie\Csp\AddCspHeaders;
use Illuminate\Foundation\Application;
use App\Http\Middleware\AddViteNonceMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(AddViteNonceMiddleware::class);
        $middleware->append(AddCspHeaders::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
