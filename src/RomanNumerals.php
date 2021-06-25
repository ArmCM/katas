<?php

namespace App;

class RomanNumerals
{
    const NUMERALS = [
        'IV' => 4,
        'I' => 1,
    ];

    /**
     * @param  int  $number
     */
    public static function generate($number)
    {
        $result = '';

        foreach (static::NUMERALS as $numeral => $arabic) {
            while ($number >= $arabic) {
                $result .= $numeral;

                $number -= $arabic;
            }
        }

        return $result;
    }
}
