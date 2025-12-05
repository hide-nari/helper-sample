<?php

namespace Hidenari\HelperSample;

function fizzBuzz(int|float $number): int|string
{
    return match (true) {
        (int)$number % 15 === 0 => 'fizzbuzz',
        (int)$number % 3 === 0 => 'fizz',
        (int)$number % 5 === 0 => 'buzz',
        default => (int)$number,
    };
}
