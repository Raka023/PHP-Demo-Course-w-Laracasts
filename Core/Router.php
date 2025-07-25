<?php

namespace Core;

use Core\Middleware\Middleware;

class Router {
    private $routes = [];

    private function add($uri, $controller, $method) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];

        return $this;
    }

    public function get($uri, $controller) {
        return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller) {
        return $this->add($uri, $controller, 'POST');
    }

    public function patch($uri, $controller) {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function put($uri, $controller) {
        return $this->add($uri, $controller, 'PUT');
    }

    public function delete($uri, $controller) {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function only($key) {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    public function route($uri, $method) {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);

                return require base_path("Http/controllers/{$route['controller']}");
            }
        }

        abort(Response::NOT_FOUND);
    }

    public function previousUrl() {
        return $_SERVER['HTTP_REFERER'];
    }
}
