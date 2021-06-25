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
        ];
    }
}
