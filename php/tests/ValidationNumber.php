<?php

use PHPUnit\Framework\TestCase;

class ValidationNumber extends TestCase
{
    /** @test */
    public function it_return_0_if_number_is_not_power_of_2()
    {
        $result = (new ValidationNumber([1]))->isPowerOf2();

        $this->assertEquals([0], $result);
    }
}
