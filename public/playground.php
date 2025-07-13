<?php

use Illuminate\Support\Collection;

require __DIR__.'/../vendor/autoload.php';

$name = new Collection([
    'jojo', 'andy', 'abdul', 'wngy'
]);

echo($name->filter(function ($name) {
    return $name === 'andy';
}));