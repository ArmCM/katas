<?php

use App\Vowels;
use PHPUnit\Framework\TestCase;

class CountVowelsTest extends TestCase
{
    /** @test */
    public function it_count_vowels()
    {
        $this->assertEquals(5, (new Vowels('abracadabra'))->count());
        $this->assertEquals(3, (new Vowels('example'))->count());
    }

    /** @test */
    public function words_without_vowels_not_allowed()
    {
        $this->expectException(\Exception::class);

        (new Vowels('gym'))->count();
    }
}
