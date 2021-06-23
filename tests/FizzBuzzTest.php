<?php

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    /** @test */
    public function it_return_fizz_for_multiples_of_three()
    {
        foreach ([3, 6, 9, 12] as $number) {
            $this->assertEquals('fizz', FizzBuzz::convert($number));
        }
    }
}