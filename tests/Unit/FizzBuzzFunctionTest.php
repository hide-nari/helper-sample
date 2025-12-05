<?php

use function Hidenari\HelperSample\fizzBuzz;

test('helper file fizzBuzz function test int pattern',
    function (string $args, int|string $result) {
        expect(fizzBuzz($args) === $result)->toBeTrue();
    })->with([
    ["1", 1],
    ["2", 2],
    ["3", "fizz"],
    ["4", 4],
    ["5", "buzz"],
    ["6", "fizz"],
    ["7", 7],
    ["8", 8],
    ["9", "fizz"],
    ["10", "buzz"],
    ["11", 11],
    ["12", "fizz"],
    ["13", 13],
    ["14", 14],
    ["15", "fizzbuzz"],
]);

test('helper file fizzBuzz function test float pattern',
    function (string $args, int|string $result) {
        expect(fizzBuzz($args) === $result)->toBeTrue();
    })->with([
    ["1.0", 1],
    ["1.1", 1],
    ["2.0", 2],
    ["2.1", 2],
    ["3.0", "fizz"],
    ["3.1", "fizz"],
]);

test('helper file fizzBuzz function test null boolean string pattern',
    function (null|bool|string $args, string $result) {
        expect(fizzBuzz($args) === $result)->toBeTrue();
    })->with([
    [null, "not a number"],
    [true, "not a number"],
    [false, "not a number"],
    ["true", "not a number"],
    ["false", "not a number"],
    ["str", "not a number"],
]);