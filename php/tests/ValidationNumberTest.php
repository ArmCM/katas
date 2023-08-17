<?php

use PHPUnit\Framework\TestCase;
use App\ValidationNumber;

class ValidationNumberTest extends TestCase {
    /** @test */
    public function it_return_0_if_number_is_not_power_of_2()
    {
        $result = (new ValidationNumber([12]))->determinePowerOf2();

        $this->assertEquals([0], $result);
    }

    /** @test */
    public function it_return_1_if_number_is_power_of_2()
    {
        $result = (new ValidationNumber([8]))->determinePowerOf2();

        $this->assertEquals([1], $result);
    }

    /** @test */
    public function it_return_a_combination_of_1_0_if_number_is_or_not_powerOf2()
    {
        $result = (new ValidationNumber([1, 3, 8, 12, 16, 24]))->determinePowerOf2();

        $this->assertEquals([1, 0, 1, 0, 1, 0], $result);
    }
}
