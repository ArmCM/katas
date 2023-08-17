<?php

namespace App;

class ValidationNumber {
    protected array $numbers;
    protected array $outPut = [];

    public function __construct($numbers = [])
    {
        $this->numbers = $numbers;
    }

    public function determinePowerOf2(): array
    {
        foreach ($this->numbers as $number) {
            if ($this->isPowerOf2($number)) {
                $this->outPut[] = 1;
            }

            if ($this->isNotPowerOf2($number)) {
                $this->outPut[] = 0;
            }
        }

        return $this->outPut;
    }

    protected function isPowerOf2($number): bool
    {
        return ($number & ($number - 1)) == 0 && $number > 0;
    }

    protected function isNotPowerOf2($number): bool
    {
        return ! $this->isPowerOf2($number);
    }
}
