<?php

use Core\Authenticator;
use Http\Forms\RegisterForm;

$form = RegisterForm::validate($attributes = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'password_confirmation' => $_POST['password_confirmation']
]);

$registered = (new Authenticator())->attemptRegister(
    $attributes['name'],
    $attributes['email'],
    $attributes['password']
);

if (! $registered) {
    $form->error(
        'email', 'An account with this email already exists'
    )->throw();
}

redirect('/');