<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$signedIn = (new Authenticator())->attemptLogin(
    $attributes['email'],
    $attributes['password']
);

if (! $signedIn) {
    $form->error(
        'password', 'Incorrect password or email adress'
    )->throw();
}

redirect('/');