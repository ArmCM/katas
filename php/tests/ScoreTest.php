<?php

use PHPUnit\Framework\TestCase;

class ScoreTest extends TestCase
{
    /** @test */
    public function it_add_one_point_if_bob_win_a_turn()
    {
        $alicePoints = [2];
        $bobPoints = [5];

        $points = Score::sum($alicePoints, $bobPoints);

        $this->assertEquals([0, 1], $points);
    }
}
