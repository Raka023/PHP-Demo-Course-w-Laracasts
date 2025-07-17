<?php

namespace Core;

class Authenticator
{
    public function attemptLogin($email, $password) {
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

    public function attemptRegister($name, $email, $password) {
        $db = App::resolve(Database::class);

        $user = $db->query("SELECT * FROM users WHERE email = :email", [
            'email' => $email
        ])->find();

        if ($user) {
            $errors['email'] = 'An account with this email already exists';
            return false;
            die;
        }

        $db->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)", [
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);

        login([
            'id' => $db->query("SELECT id FROM users WHERE email = ?", [$email])->find()['id'],
            'name' => $name
        ]);

        return true;
    }
}