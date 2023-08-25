<?php

use Application\Middlewares\Auth;

$route = new \League\Route\RouteCollection($container);

$route->group('/', function (\League\Route\RouteGroup $route) use ($container) {
    $route->map('GET', '/', 'Application\Controllers\HomeController::index');
    $route->map('GET', '/profile/{name}/{age}', 'Application\Controllers\ProfileController::index')
        ->middleware($container->get(Auth::class));
});

return $route;
