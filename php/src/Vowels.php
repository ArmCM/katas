<?php

namespace App;

class Vowels
{
    protected string $word;
    protected array $vowels = ['a', 'e', 'i', 'o', 'u'];

    public function __construct(string $word)
    {
        $this->word = $word;
    }

    public function count()
    {
        $countLetters = array_count_values(str_split($this->word));

        $countVowels = array_filter($countLetters, function ($value) {

            return array_keys($this->vowels, $value);

        }, ARRAY_FILTER_USE_KEY);

        return array_sum($countVowels);
    }
}
