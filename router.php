<?php

$routes = require 'routes.php';

function routeToContoller($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(Response::NOT_FOUND);
    }
}

function abort($code) {
    http_response_code($code);
    require 'views/errors.view.php';
    die;
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToContoller($uri, $routes);