<?php

use PHPUnit\Framework\TestCase;

class AnagramsTest extends TestCase
{
    public function testAnagramsWords()
    {
        require 'index.php';
        $this->assertEquals(['a'], anagrams('a', ['a', 'b', 'c', 'd']));
        $this->assertEquals(['carer', 'arcre', 'carre'], anagrams('racer', ['carer', 'arcre', 'carre', 'racrs', 'racers', 'arceer', 'raccer', 'carrer', 'cerarr']));
        $this->assertEquals(['aabb', 'bbaa'], anagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']), 'Your function should work for an example provided in the Kata Description');
        $this->assertEquals(['carer', 'racer'], anagrams('racer', ['crazer', 'carer', 'racar', 'caers', 'racer']), 'Your function should work for an example provided in the Kata Description');
        $this->assertEquals([], anagrams('laser', ['lazing', 'lazy', 'lacer']), 'Your function should work for an example provided in the Kata Description');
    }
}