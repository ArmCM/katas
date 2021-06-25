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

        $this->assertsame(0, $calculator->add(""));
    }

    /** @test */
    public function find_the_sum_of_a_single_number()
    {
        $calculator = new StringCalculator;

        $this->assertsame(5, $calculator->add("5"));
    }

    /** @test */
    public function find_the_sum_of_two_numbers()
    {
        $calculator = new StringCalculator;

        $this->assertsame(10, $calculator->add("5, 5"));
    }

    /** @test */
    public function find_the_sum_of_any_numbers()
    {
        $calculator = new StringCalculator;

        $this->assertsame(21, $calculator->add("5, 5, 9, 2"));
    }

    /** @test */
    public function accept_a_new_line_character_as_a_delimiter_too()
    {
        $calculator = new StringCalculator;

        $this->assertsame(9, $calculator->add("5\n2\n2"));
    }

    /** @test */
    public function negative_numbers_not_allowed()
    {
        $this->expectException(\Exception::class);

        (new StringCalculator)->add("5, -2");
    }

    /** @test */
    public function numbers_greater_that_1000_are_ignored()
    {
        $calculator = new StringCalculator;

        $this->assertsame(5, $calculator->add("5, 10001"));
    }

    /** @test */
    public function it_support_custom_delimiters()
    {
        $calculator = new StringCalculator;

        $this->assertEquals(9, $calculator->add("//:\n5:4"));
    }
}
