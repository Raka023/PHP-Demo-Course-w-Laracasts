<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm {
    protected $errors = [];

    public function validate($email, $password) {

        if (! Validator::email($email)) {
            $this->errors['email'] = 'Please enter a valid email address';
        }

        if (! Validator::string($password, 1, 255)) {
            $this->errors['password'] = 'Please enter a Password';
        }

        return empty($this->errors);
    }

    public function errors() {
        return $this->errors;
    }

    public function error($field, $message) {
        $this->errors[$field] = $message;
    }
}