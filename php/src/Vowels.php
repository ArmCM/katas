<?php

namespace App;

use Exception;

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
        $vowels = $this->countVowels($this->word);

        if (empty($vowels)) {
            throw new Exception('The string not contains vowels.');
        }

        return array_sum($vowels);
    }

    protected function countLetters($word): array
    {
        return array_count_values(str_split($word));
    }

    protected function countVowels($word): array
    {
        return array_filter($this->countLetters($word), function ($value) {
            return array_keys($this->vowels, $value);
        }, ARRAY_FILTER_USE_KEY);
    }
}
