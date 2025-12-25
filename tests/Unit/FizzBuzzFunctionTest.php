<?php

use Hidenari\HelperSample\Helper;
use Hidenari\HelperSample\HelperTrait;

use function Hidenari\HelperSample\fizzBuzz;

$trait = new class {
    use HelperTrait;
};

test('helper file fizzBuzz function test int pattern',
    function (string $args, int|string $result) use ($trait) {
        expect(fizzBuzz($args) === $result)->toBeTrue();
        expect($trait->fizzBuzz($args) === $result)->toBeTrue();
        expect(new Helper()->fizzBuzz($args) === $result)->toBeTrue();
    })
    ->with([
        ['-15', 'fizzbuzz'],
        ['-5', 'buzz'],
        ['-3', 'fizz'],
        ['-2', -2],
        ['-1', -1],
        ['0', 'fizzbuzz'],
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
    ]);

test('helper file fizzBuzz function test float pattern',
    function (string $args, int|string $result) use ($trait) {
        expect(fizzBuzz($args) === $result)->toBeTrue();
        expect($trait->fizzBuzz($args) === $result)->toBeTrue();
        expect(new Helper()->fizzBuzz($args) === $result)->toBeTrue();
    })
    ->with([
        ['-15.1', 'fizzbuzz'],
        ['-5.1', 'buzz'],
        ['-3.1', 'fizz'],
        ['-2.1', -2],
        ['-1.1', -1],
        ['0.0', 'fizzbuzz'],
        ['1.0', 1],
        ['1.1', 1],
        ['2.0', 2],
        ['2.1', 2],
        ['3.0', 'fizz'],
        ['3.1', 'fizz'],
    ]);

test('helper file fizzBuzz function test bool error pattern',
    function (bool $args) use ($trait) {
        fizzBuzz($args);
        $trait->fizzBuzz($args);
        new Helper()->fizzBuzz($args);
    })
    ->with([
        [true],
        [false],
    ])
    ->throws(TypeError::class, 'bool type error');

test('helper file fizzBuzz function test etc error pattern',
    function (null|string|array $args) use ($trait) {
        fizzBuzz($args);
        $trait->fizzBuzz($args);
        new Helper()->fizzBuzz($args);
    })
    ->with([
        [null],
        ['str'],
        [[1, 2, 3]],
        new stdClass,
        (object) ['name' => 'taro'],
        new class {
            public $name = 'taro';
        },
    ])
    ->throws(TypeError::class);
