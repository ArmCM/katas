<?php

namespace App;

use Exception;
use function PHPUnit\Framework\isEmpty;

class Vowels
{
    protected string $word;
    protected array $vowels = ['a', 'e', 'i', 'o', 'u'];

    public function __construct(string $word)
    {
        $this->word = $word;
    }

    /**
     * @throws Exception
     */
    public function count(): float|int
    {
        $countLetters = array_count_values(str_split($this->word));

        $countVowels = array_filter($countLetters, function ($value) {

            return array_keys($this->vowels, $value);

        }, ARRAY_FILTER_USE_KEY);

        if (empty($countVowels)) {
            throw new Exception('The string not contains vowels.');
        }

        return array_sum($countVowels);
    }
}
