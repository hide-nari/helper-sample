<?php

namespace Hidenari\HelperSample;

function fizzBuzz(int|float|bool|null $number): int|string
{
    if (is_null($number) || is_bool($number)) {
        return 'not a number';
    }

    return match (true) {
        (int) $number % 15 === 0 => 'fizzbuzz',
        (int) $number % 3 === 0 => 'fizz',
        (int) $number % 5 === 0 => 'buzz',
        default => (int) $number,
    };
}
