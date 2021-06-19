<?php


class ConversionTestCase extends \PHPUnit\Framework\TestCase
{
    public function testBaseTests()
    {
        require 'index.php';
        $this->assertEquals("FFFFFF", rgb(255, 255, 255));
        $this->assertEquals("FFFFFF", rgb(255, 255, 300));
        $this->assertEquals("000000", rgb(0, 0, 0));
        $this->assertEquals("000000", rgb(-500, 0, 0));
        $this->assertEquals("9400D3", rgb(148, 0, 211));
    }
}