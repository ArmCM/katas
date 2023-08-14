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
    public function add(string $numericString): float|int
    {
        if ($numericString === "") {
            return 0;
        }

        $numbers = $this->parseString($numericString);

        $this->disallowNegatives($numbers);

        return array_sum($this->ignoreGreaterThan1000($numbers));
    }

    protected function parseString(string $numbers): array
    {
        if (preg_match("/{$this->customDelimiter}/", $numbers, $matches)) {
            $this->delimiter = $matches[1];

            $numbers = str_replace($matches[0], '', $numbers);
        }

        return preg_split("/{$this->delimiter}/", $numbers);
    }

    /**
     *
     *@throws Exception
     */
    protected function disallowNegatives(array $numbers): array
    {
        foreach ($numbers as $number) {
            if ( $number < 0 ) {
                throw new Exception('Negative numbers are disallowed');
            }
        }

        return $numbers;
    }

    protected function ignoreGreaterThan1000(array $numbers): array
    {
        return array_filter(
            $numbers, fn ($number) => $number <= self::MAX_NUMBER_ALLOWED
        );
    }
}
