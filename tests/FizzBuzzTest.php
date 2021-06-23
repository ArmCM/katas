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

    /** @test */
    public function it_return_buzz_for_multiples_of_five()
    {
        foreach ([5, 10, 20, 25] as $number) {
            $this->assertEquals('buzz', FizzBuzz::convert($number));
        }
    }

    /** @test */
    public function it_return_fizzBuzz_for_multiples_of_three_and_five()
    {
        foreach ([15, 30, 45, 60] as $number) {
            $this->assertEquals('fizzBuzz', FizzBuzz::convert($number));
        }
    }
}
