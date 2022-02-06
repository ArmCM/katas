<?php

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

/**
 * @link https://osherove.com/tdd-kata-1
 */
class StringCalculatorTest extends TestCase
{
    protected $calculator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->calculator = new StringCalculator;
    }

    /** @test */
    public function evaluates_an_empty_string_as_0()
    {
        $this->assertsame(0, $this->calculator->add(""));
    }

    /** @test */
    public function find_the_sum_of_a_single_number()
    {
        $this->assertsame(5, $this->calculator->add("5"));
    }

    /** @test */
    public function find_the_sum_of_any_numbers()
    {
        $this->assertsame(21, $this->calculator->add("5, 5, 9, 2"));
    }

    /** @test */
    public function accept_a_new_line_character_as_a_delimiter_too()
    {
        $this->assertsame(9, $this->calculator->add("5\n2\n2"));
    }

    /** @test */
    public function negative_numbers_not_allowed()
    {
        $this->expectException(\Exception::class);

        $this->calculator->add("5, -2");
    }

    /** @test */
    public function numbers_greater_that_1000_are_ignored()
    {
        $this->assertsame(5, $this->calculator->add("5, 10001"));
    }

    /** @test */
    public function it_support_custom_delimiters()
    {
        $this->assertEquals(9, $this->calculator->add("//:\n5:4"));
    }
}
