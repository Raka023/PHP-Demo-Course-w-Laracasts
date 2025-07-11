<?php

use Core\App;
use Core\Database;
use Core\Validator;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

$errors = [];

if (Validator::string($name, 1, 255)) {
    $errors['name'] = 'Please enter a name';
}

if (Validator::email($email)) {
    $errors['email'] = 'Please enter a valid email address';
}

if (Validator::string($password, 8, 255)) {
    $errors['password'] = 'Please enter a Password of at least 8 characters';
}

if (Validator::string($password_confirmation, 8, 255)) {
    $errors['password'] = 'Please enter a Password of at least 8 characters';
}

if ($password !== $password_confirmation) {
    $errors['password'] = 'Password does not match';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email
])->find();

if ($user) {
    $errors['email'] = 'An account with this email already exists';

    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)", [
    'name' => $name,
    'email' => $email,
    'password' => $password_confirmation
]);

$_SESSION['user'] = [
    'name' => $name,
    'email' => $email
];

redirect('/');