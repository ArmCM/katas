<?php

use App\ZigZag;
use PHPUnit\Framework\TestCase;

/**
 * @link https://codesignal
 */
class ZigZagTest extends TestCase
{
    /** @test */
    public function return_0_if_a_array_is_empty()
    {
        $numbers = [];

        $zigzag = new ZigZag;

        $this->assertEquals(0, $zigzag->validate($numbers));
    }

    /** @test */
    public function array_must_be_contain_3_elements_minimum()
    {
        $numbers = [1, 3, 2];

        $zigzag = new ZigZag;

        $this->assertEquals(1, $zigzag->validate($numbers));
    }

    /** @test */
    public function array_must_be_contain_100_elements_maximum()
    {
        $numbers = range(1, 100);

        $zigzag = new ZigZag;

        $this->assertEquals(1, $zigzag->validate($numbers));
    }

    /** @test */
    public function validate_if_first_element_is_1()
    {
        $numbers = [0, 2, 1];

        $zigzag = new ZigZag;

        $this->assertEquals(0, $zigzag->validate($numbers));
    }

    /** @test */
    public function validate_if_first_element_is_less_than_or_equal_1000000000()
    {
        $numbers = [1000000000, 2, 1];

        $zigzag = new ZigZag;

        $this->assertEquals(1, $zigzag->validate($numbers));
    }
}


// Constrains
    // 3 <= numbers.length <= 100 - OK
    // 1 <= numbers[i]  <= 10**9 - OK

// Rules
//  a < b > c  or a > b < c
// numbers.length - 2
// output  1 if is a triple numbers is a zigzag  and 0 otherwise
