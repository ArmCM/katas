<?php

use PHPUnit\Framework\TestCase;

class CalculatePointsTest extends TestCase
{
    /** @test */
    public function it_add_one_point_if_bob_win_a_turn()
    {
        $alice = [2];
        $bob = [5];
        $points = new CalculatePoints($alice, $bob);

        $this->assertEquals([0, 1], $points);
    }
}
