<?php

namespace App;

class RomanNumerals
{
    /**
     * @param  int  $number
     */
    public static function generate($number)
    {
        $result = '';

        while ($number > 0) {
            $result .= 'I';

            $number -= 1;
        }

        return $result;
    }
}
