<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class RegisterForm {
    protected $errors = [];

    public function __construct(public array $attributes) {
        if (! Validator::string($attributes['name'])) {
            $this->errors['name'] = 'Please enter a name';
        }

        if (! Validator::email($attributes['email'])) {
            $this->errors['email'] = 'Please enter a valid email address';
        }

        if (! Validator::string($attributes['password'], 8, 255)) {
            $this->errors['password'] = 'Please enter a Password of at least 8 characters';
        }

        if (! Validator::string($attributes['password_confirmation'], 8, 255)) {
            $this->errors['password'] = 'Please enter a Password of at least 8 characters';
        }

        if ($attributes['password'] !== $attributes['password_confirmation']) {
            $this->errors['password'] = 'Password does not match';
        }
    }

    public static function validate($attributes) {
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw() {
        ValidationException::throw($this->errors, $this->attributes);
    }

    public function failed() {
        return count($this->errors);
    }

    public function errors() {
        return $this->errors;
    }

    public function error($field, $message) {
        $this->errors[$field] = $message;

        return $this;
    }
}