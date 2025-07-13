<?php

use Core\Container;

test('resolve out of container', function () {
    // arrange
    $container = new Container();

    $container->bind('foo', fn() => 'bar');

    // act
    $result = $container->resolve('foo');

    // expect
    expect($result)->toEqual('bar');
});
