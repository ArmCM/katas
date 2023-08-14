<?php

namespace App;

class FizzBuzz
{
    /**
     * @param  int  $number
     * @return int|string
     */
    public static function convert(int $number): int|string
    {
        $result = '';

        if ($number % 3 === 0) {
            $result .= 'fizz';
        }

        if ($number % 5 === 0) {
            $result .= 'buzz';
        }

        return $result ?: $number;
    }
}
