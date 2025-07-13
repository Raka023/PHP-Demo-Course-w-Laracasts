<?php

use Core\Validator;

test('validate a string', function () {
    expect(Validator::string('foobar'))->toBeTrue();
    expect(Validator::string(''))->toBeFalse();
});

test('validate a string with a minimum length', function () {
    expect(Validator::string('foobar', 6))->toBeTrue();
});

test('validate an email', function () {
    expect(Validator::email('foobar@example.com'))->toBeStringBackedEnum();
})->only();