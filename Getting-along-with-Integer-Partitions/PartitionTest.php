<?php


class PartitionTest extends PHPUnit\Framework\TestCase
{
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    function testBasics()
    {
        require 'index.php';
        $this->revTest(part(1), "Range: 0 Average: 1.00 Median: 1.00");
        $this->revTest(part(2), "Range: 1 Average: 1.50 Median: 1.50");
        $this->revTest(part(3), "Range: 2 Average: 2.00 Median: 2.00");
        $this->revTest(part(4), "Range: 3 Average: 2.50 Median: 2.50");
        $this->revTest(part(5), "Range: 5 Average: 3.50 Median: 3.50");
        $this->revTest(part(6), "Range: 8 Average: 4.75 Median: 4.50");
        $this->revTest(part(7), "Range: 11 Average: 6.09 Median: 6.00");
    }
}