<?php

namespace App;

class Score {
    protected array $playerOne;
    protected array $playerTwo;
    protected int $playerOnePoints = 0;
    protected int $playerTwoPoints = 0;

    public function __construct($playerOne, $playerTwo)
    {
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
    }

    public function sum(): array
    {
        for ($i = 0, $j = 0; $i < count($this->playerOne), $j < count($this->playerTwo); $i++, $j++) {
            if ($this->playerOne[$i] > $this->playerTwo[$j]) {
                $this->playerOnePoints += 1;
            }

            if ($this->playerTwo[$j] > $this->playerOne[$i]) {
                $this->playerTwoPoints += 1;
            }
        }

        return [$this->playerOnePoints, $this->playerTwoPoints];
    }
}
