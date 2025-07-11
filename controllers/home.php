<?php

$_SESSION['name'] ??= 'John';

view('home.view.php', [
    'heading' => 'Home',
    'description' => 'Welcome back, ' . $_SESSION['name'] ?? 'Guest!'
]);