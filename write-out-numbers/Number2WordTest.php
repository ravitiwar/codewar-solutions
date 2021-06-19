<?php


class Number2WordTest extends PHPUnit\Framework\TestCase
{
    function testExamples()
    {
        require 'index.php';
        $this->assertEquals("zero", number2words(0));
        $this->assertEquals("one", number2words(1));
        $this->assertEquals("eight", number2words(8));
        $this->assertEquals("ten", number2words(10));
        $this->assertEquals("nineteen", number2words(19));
        $this->assertEquals("twenty", number2words(20));
        $this->assertEquals("twenty-two", number2words(22));
        $this->assertEquals("fifty-four", number2words(54));
        $this->assertEquals("eighty", number2words(80));
        $this->assertEquals("ninety-eight", number2words(98));
        $this->assertEquals("one hundred", number2words(100));
        $this->assertEquals("three hundred one", number2words(301));
        $this->assertEquals("seven hundred ninety-three", number2words(793));
        $this->assertEquals("eight hundred", number2words(800));
        $this->assertEquals("six hundred fifty", number2words(650));
        $this->assertEquals("one thousand", number2words(1000));
        $this->assertEquals("one thousand three", number2words(1003));
        $this->assertEquals("seven thousand two hundred seventeen", number2words(7217));
        $this->assertEquals("one hundred ninety-four thousand five hundred seventeen", number2words(194517));
        $this->assertEquals("seventy thousand two hundred eight", number2words(70208));
        $this->assertEquals("one thousand", number2words(1000));
    }
}