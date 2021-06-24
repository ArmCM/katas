<?php

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

/**
 * @link https://osherove.com/tdd-kata-1
 */
class StringCalculatorTest extends TestCase
{
    /** @test */
    public function evaluates_an_empty_string_as_0()
    {
        $calculator = new StringCalculator;

        $this->assertsame(0, $calculator->add(''));
    }

    /** @test */
    public function find_the_sum_of_a_single_number()
    {
        $calculator = new StringCalculator;

        $this->assertsame(5, $calculator->add('5'));
    }

    /** @test */
    public function find_the_sum_of_two_numbers()
    {
        $calculator = new StringCalculator;

        $this->assertsame(10, $calculator->add('5, 5'));
    }

    /** @test */
    public function find_the_sum_of_any_numbers()
    {
        $calculator = new StringCalculator;

        $this->assertsame(21, $calculator->add('5, 5, 9, 2'));
    }
}
