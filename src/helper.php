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

function weekdayCircle(): \Generator
{
    $day = 'Sunday';
    while (true) {
        yield $day;
        $day = match ($day) {
            'Sunday' => 'Monday',
            'Monday' => 'Tuesday',
            'Tuesday' => 'Wednesday',
            'Wednesday' => 'Thursday',
            'Thursday' => 'Friday',
            'Friday' => 'Saturday',
            'Saturday' => 'Sunday'
        };
    }
}

function weekdayCircleJapan(): \Generator
{
    $day = '日';
    while (true) {
        yield $day;
        $day = match ($day) {
            '日' => '月',
            '月' => '火',
            '火' => '水',
            '水' => '木',
            '木' => '金',
            '金' => '土',
            '土' => '日'
        };
    }
}
