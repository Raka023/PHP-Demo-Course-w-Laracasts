<?php

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die;
}

function navlinks($url, $style) {
    if ($style === 'desktop') {
        if ($_SERVER['REQUEST_URI'] === $url) {
            return 'class="rounded-md bg-zinc-900 px-3 py-2 text-sm font-medium text-zinc-100 border border-zinc-800 transition-colors" aria-current="page"';
        } else {
            return 'class="rounded-md px-3 py-2 text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900 transition-colors"';
        }
    }

    if ($style === 'mobile') {
        if ($_SERVER['REQUEST_URI'] === $url) {
            return 'class="block rounded-md bg-zinc-900 px-3 py-2 text-base font-medium text-zinc-100 border border-zinc-800 transition-colors" aria-current="page"';
        } else {
            return 'class="block rounded-md px-3 py-2 text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors"';
        }
    }
}