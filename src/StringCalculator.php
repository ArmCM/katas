<?php

namespace App;

class StringCalculator
{
    public function add(string $number)
    {
        if (! $number) {
            return 0;
        }

        return intval($number);
    }
}
