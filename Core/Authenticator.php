<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password) {
        $user = App::resolve(Database::class)->query("SELECT * FROM users WHERE email = :email", [
            'email' => $email
        ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                login([
                    'id' => $user['id'],
                    'name' => $user['name']
                ]);

                return true;
            }
        }

        return false;
    }
}