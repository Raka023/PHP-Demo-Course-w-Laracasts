<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (Validator::email($email)) {
    $errors['email'] = 'Please enter a valid email address';
}

if (Validator::string($password, 1, 255)) {
    $errors['password'] = 'Please enter a Password';
}

if (! empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email
])->find();

if ($user) {
    if (! password_verify($password, $user['password'])) {
        $errors['password'] = 'Incorrect password or email adress';

        return view('session/create.view.php', [
            'errors' => $errors
        ]);
    }
}

login([
    'name' => $user['name']
]);

redirect('/');