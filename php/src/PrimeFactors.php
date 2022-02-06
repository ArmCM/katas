<?php

namespace App;

class PrimeFactors
{
    /**
     * 1 Is the number divisible by 2.
     * 2 if true, then divisible by 2. if false, increase candidate and try again.
     * 3 repeat.
     *
     * @param  int  $number
     * @return array
     */
    public function generate($number)
    {
        $factors = [];

        for ($divisor = 2; $number > 1; $divisor++) { // div(3)   num(3) true   div++(3)
            for (;$number % $divisor === 0; $number = $number / $divisor) {  //  3 % 3 true,   6 / 2 = 3 num
                $factors[] = $divisor; // [2, 2, 2, 3]
            }
        }

        return $factors;
    }
}
