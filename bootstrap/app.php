<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->renderable(function (RouteNotFoundException $e) {
            // Check if the user is not authenticated
            if (!auth()->check()) {
                // Redirect to the login page
                return redirect()->route('admin.login.form');
            }

            // Handle other exceptions or return 404 view
            return response()->view('frontend::errors.404', [], 404);
        });
    })
    ->create();

