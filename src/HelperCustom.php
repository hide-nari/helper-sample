<?php

namespace Hidenari\HelperSample;

class HelperCustom extends Helper
{
    public function fizzBuzz(float|bool|int $number): int|string
    {
        $result = parent::fizzBuzz($number);

        return (int) $number % 30 === 0 ?
            strtoupper((string) $result) : $result;
    }
}
