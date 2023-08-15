<?php

use App\Score;
use PHPUnit\Framework\TestCase;

class ScoreTest extends TestCase
{
    /** @test */
    public function it_add_one_point_if_bob_win_a_turn()
    {
        $alicePoints = [1];
        $bobPoints = [2];

        $points = (new Score($alicePoints, $bobPoints))->sum();

        $this->assertEquals([0, 1], $points);
    }

    /** @test */
    public function it_can_sum_many_points()
    {
        $alicePoints = [5, 6, 7];
        $bobPoints = [3, 6, 10];

        $points = (new Score($alicePoints, $bobPoints))->sum();

        $this->assertEquals([1, 1], $points);
    }

    /** @test */
    public function it_can_tie_result()
    {
        $alicePoints = [6, 5];
        $bobPoints = [6, 5];

        $points = (new Score($alicePoints, $bobPoints))->sum();

        $this->assertEquals([0, 0], $points);
    }
}
