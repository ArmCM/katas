<?php

namespace App;

class PrimeFactors
{
    /**
     * 1 Is the number divisible by 2.
     * 2 if true, then divisible by 2. if false, increase candidate and try again.
     * 3 repeat.
     *
     * @param  $number
     * @return array
     */
    public function generate($number)
    {
        $factors = [];
        $divisor = 2;

        while ($number > 1) {
            while ($number % $divisor === 0) {
                $factors[] = $divisor;

                $number = $number / $divisor;
            }

            $divisor++;
        }

        return $factors;
    }
}
