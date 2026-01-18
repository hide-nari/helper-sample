<?php

namespace Hidenari\HelperSample;

class Helper
{
    use HelperTrait;
}

trait HelperTrait
{
    public function fizzBuzz(int|float|bool $number): int|string
    {
        return fizzBuzz($number);
    }
}

function fizzBuzz(int|float|bool $number): int|string
{
    is_bool($number) && throw new \TypeError('bool type error');
    $result = (int) $number % 3 === 0 ? 'fizz' : '';
    $result .= (int) $number % 5 === 0 ? 'buzz' : '';

    return $result ?: (int) $number;
}
