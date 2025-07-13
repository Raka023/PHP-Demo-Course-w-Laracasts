<?php

use Core\Response;

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die;
}

function base_path($path) {
    return __DIR__ . '/../' . $path;
}

function view($path, $attributes = []) {
    extract($attributes);
    require base_path("/views/{$path}");
    die;
}

function abort($code){
    http_response_code($code);
    require base_path('views/errors.view.php');
    die;
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if (! $condition) {
        abort($status);
    }
}

function redirect($url) {
    header("Location: {$url}");
    die;
}

function login($user) {
    $_SESSION['user'] = [
        'name' => $user['name']
    ];

    session_regenerate_id(true);
}

function logout() {
    $_SESSION = [];
    $params = session_get_cookie_params();

    session_destroy();
    session_unset();

    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}

function navlinks($url, $style = 'desktop') {
    $current = $_SERVER['REQUEST_URI'];

    if ($url === '/' && $current !== '/') {
        $isActive = false;
    } else {
        $isActive = strpos($current, $url) === 0;
    }

    if ($style === 'desktop') {
        if ($isActive) {
            return 'class="rounded-md bg-zinc-900 px-3 py-2 text-sm font-semibold text-zinc-100 border border-zinc-800 transition-colors" aria-current="page"';
        } else {
            return 'class="rounded-md px-3 py-2 text-sm font-semibold text-zinc-300 hover:text-zinc-100 hover:bg-zinc-800 transition-colors"';
        }
    }

    if ($style === 'mobile') {
        if ($isActive) {
            return 'class="block rounded-md bg-zinc-900 px-3 py-2 text-base font-semibold text-zinc-100 border border-zinc-800 transition-colors" aria-current="page"';
        } else {
            return 'class="block rounded-md px-3 py-2 text-base font-semibold text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors"';
        }
    }
}