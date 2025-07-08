<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home.php',
    '/notes' => 'controllers/notes.php',
    '/notes/note' => 'controllers/note.php',
    '/todos' => 'controllers/todos.php',
    '/calendar' => 'controllers/calendar.php'
];

function routeToContoller($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

function abort($code) {
    http_response_code($code);
    require 'views/errors.view.php';
    die;
}

routeToContoller($uri, $routes);