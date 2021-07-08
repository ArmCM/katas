<?php

namespace App;

class ZigZag
{
    public function validate(array $numbers)
    {
        if ((sizeof($numbers) >= 3 && sizeof($numbers) <= 100) && ($numbers[0] >= 1 && $numbers[0] <= 1000000000)) {
            for ($i = 0; $i <= sizeof($numbers); $i++) {
                return 1;
            }
        }

        return 0;
    }
}
