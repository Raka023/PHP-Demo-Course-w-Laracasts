<?php

function returnAuthUser() {
    return $_SESSION['user']['name'] ?? 'Guest';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $submitted = true;
} else {
    $submitted = false;
}

view('support.view.php', [
    'heading' => 'Support',
    'description' => 'Need any Assistance, ' . returnAuthUser() . '?',
    'submitted' => $submitted,
    'name' => $name ?? '',
    'email' => $email ?? '',
    'message' => $message ?? ''
]);