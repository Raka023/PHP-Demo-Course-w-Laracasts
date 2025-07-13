<?php

use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    return view('session/create.view.php', [
        'errors' => $form->errors()
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