<?php

use Hidenari\HelperSample\HelperCustom;

test('helper custom file fizzBuzz custom function test int pattern',
    function (string $args, int|string $result) {
        expect(new HelperCustom()->fizzBuzz($args) === $result)->toBeTrue();
    })->with([
        ['-15', 'fizzbuzz'],
        ['-5', 'buzz'],
        ['-3', 'fizz'],
        ['-2', -2],
        ['-1', -1],
        ['0', 'FIZZBUZZ'],
        ['1', 1],
        ['2', 2],
        ['3', 'fizz'],
        ['4', 4],
        ['5', 'buzz'],
        ['6', 'fizz'],
        ['7', 7],
        ['8', 8],
        ['9', 'fizz'],
        ['10', 'buzz'],
        ['11', 11],
        ['12', 'fizz'],
        ['13', 13],
        ['14', 14],
        ['15', 'fizzbuzz'],
        ['30', 'FIZZBUZZ'],
    ]);

test('helper custom file fizzBuzz function test float pattern',
    function (string $args, int|string $result) {
        expect(new HelperCustom()->fizzBuzz($args) === $result)->toBeTrue();
    })
    ->with([
        ['-15.1', 'fizzbuzz'],
        ['-5.1', 'buzz'],
        ['-3.1', 'fizz'],
        ['-2.1', -2],
        ['-1.1', -1],
        ['0.0', 'FIZZBUZZ'],
        ['1.0', 1],
        ['1.1', 1],
        ['2.0', 2],
        ['2.1', 2],
        ['3.0', 'fizz'],
        ['3.1', 'fizz'],
        ['30.0', 'FIZZBUZZ'],
    ]);

test('helper custom file fizzBuzz function test bool error pattern',
    function (bool $args) {
        new HelperCustom()->fizzBuzz($args);
    })
    ->with([
        [true],
        [false],
    ])
    ->throws(TypeError::class, 'bool type error');

test('helper custom file fizzBuzz function test etc error pattern',
    function (null|string|array $args) {
        new HelperCustom()->fizzBuzz($args);
    })
    ->with([
        [null],
        ['str'],
        ['str123'],
        ['123str'],
        [[1, 2, 3]],
        new stdClass,
        (object) ['name' => 'taro'],
        new class
        {
            public $name = 'taro';
        },
    ])
    ->throws(TypeError::class);
