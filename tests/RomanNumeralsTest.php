<?php

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

/**
 * @link https://www.hackerrank.com/contests/modena-coding-april-2017/challenges/roman-number
 */
class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    public function it_validates_if_arabic_number_corresponds_the_roman_numeral_representation($number, $numeral)
    {
        $this->assertEquals($numeral, RomanNumerals::generate($number));
    }

    public function checks()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [40, 'XL'],
            [50, 'L'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
            [3999, 'MMMCMXCIX'],
        ];
    }
}
