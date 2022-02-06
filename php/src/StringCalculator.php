<?php

namespace App;

use Exception;

class StringCalculator
{
    const MAX_NUMBER_ALLOWED = 1000;
    protected string $delimiter = "[,|\n]";
    protected string $customDelimiter = "\/\/(.)\n";

    /**
     * @throws Exception
     */
    public function add(string $numericString)
    {
        $numbers = $this->parseString($numericString);

        $this->disallowNegatives($numbers);

        return array_sum($this->ignoreGreaterThan1000($numbers));
    }

    /**
     * @param  string  $numbers
     * @return array
     */
    protected function parseString($numbers)
    {
        if (preg_match("/{$this->customDelimiter}/", $numbers, $matches)) {
            $this->delimiter = $matches[1];

            $numbers = str_replace($matches[0], '', $numbers);
        }

        return preg_split("/{$this->delimiter}/", $numbers);
    }

    /**
     * @param  array  $numbers
     * @throws Exception
     * @return void
     */
    protected function disallowNegatives($numbers)
    {
        foreach ($numbers as $number) {
            if ( $number < 0 ) {
                throw new Exception('Negative numbers are disallowed');
            }
        }
    }

    /**
     * @param  array  $numbers
     * @return array
     */
    protected function ignoreGreaterThan1000($numbers)
    {
        return array_filter(
            $numbers, fn ($number) => $number <= self::MAX_NUMBER_ALLOWED
        );
    }
}
