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

    /** @test */
    public function cannot_generate_a_roman_numeral_for_less_than_1()
    {
        $this->assertFalse(RomanNumerals::generate(0));
    }

    /** @test */
    public function cannot_generate_a_roman_numeral_for_more_that_3999()
    {
        $this->assertFalse(RomanNumerals::generate(4000));
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
