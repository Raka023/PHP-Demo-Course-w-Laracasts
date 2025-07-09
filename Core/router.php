<?php

$routes = require base_path('routes.php');

function routeToContoller($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort(Response::NOT_FOUND);
    }
}

function abort($code) {
    http_response_code($code);
    require base_path('views/errors.view.php');
    die;
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToContoller($uri, $routes);