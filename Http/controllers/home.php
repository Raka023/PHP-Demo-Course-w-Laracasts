<?php

function returnAuthUser() {
    return $_SESSION['user']['name'] ?? 'Guest';
}

view('home.view.php', [
    'heading' => 'Home',
    'description' => 'Welcome back, ' . returnAuthUser() . '!'
]);