<?php

namespace Hidenari\HelperSample;

function fizzBuzz(int|float|bool $number): int|string
{
    if (is_bool($number)) {
        throw new \TypeError('bool type error');
    }

    return match (true) {
        (int) $number % 3 === 0 && (int) $number % 5 === 0 => 'fizzbuzz',
        (int) $number % 3 === 0 => 'fizz',
        (int) $number % 5 === 0 => 'buzz',
        default => (int) $number,
    };
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
