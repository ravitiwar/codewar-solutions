<?php

use PHPUnit\Framework\TestCase;

class SmallTest extends TestCase
{
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testSmall()
    {
        require 'index.php';

        $this->revTest(smallest(261235), [126235, 2, 0]);
        $this->revTest(smallest(209917), [29917, 0, 1]);
        $this->revTest(smallest(285365), [238565, 3, 1]);
        $this->revTest(smallest(8951131690500120), [895113169050012, 15, 0]);

    }
}