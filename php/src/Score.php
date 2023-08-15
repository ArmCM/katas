<?php

namespace App;

class Score
{
    protected static int $playerOnePoints = 0;
    protected static int $playerTwoPoints = 0;

    public static function sum($playerOne, $playerTwo)
    {
        for ($i = 0; $i < count($playerOne); $i++) {
            for ($j = 0; $j < count($playerTwo); $j++) {
                if ($playerOne[$i] > $playerTwo[$j]) {
                    self::$playerOnePoints += 1;
                }

                if ($playerTwo[$j] > $playerOne[$i]) {
                    self::$playerTwoPoints += 1;
                }
            }
        }

        return [self::$playerOnePoints, self::$playerTwoPoints];
    }
}
