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
}
