<?php

namespace Hidenari\HelperSample;

use NoDiscard;
use Override;

class HelperCustom extends Helper
{
    #[Override]
    #[NoDiscard]
    public function fizzBuzz(float|bool|int $number): int|string
    {
        $result = parent::fizzBuzz($number);

        return
            (int) $number % 30 === 0
                ? (string) $result |> strtoupper(...) : $result;
    }
}
