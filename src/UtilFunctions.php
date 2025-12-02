<?php

namespace Hidenari\FunctionSample;

class UtilFunctions
{
    public static function fizzBuzz(int $number): int|string
    {
        return match (true) {
            $number % 15 === 0 => 'fizzbuzz',
            $number % 3 === 0 => 'fizz',
            $number % 5 === 0 => 'buzz',
            default => $number,
        };
    }
}
