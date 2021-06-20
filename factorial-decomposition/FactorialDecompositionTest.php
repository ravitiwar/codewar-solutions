<?php


class FactorialDecompositionTest extends \PHPUnit\Framework\TestCase
{
    private function dotest($n, $expect)
    {
        $actual = decomp($n);
        $this->assertEquals($expect, $actual);
    }

    public function testBasics()
    {
        require 'index.php';
        $this->dotest(17, "2^15 * 3^6 * 5^3 * 7^2 * 11 * 13 * 17");
        $this->dotest(5, "2^3 * 3 * 5");
        $this->dotest(22, "2^19 * 3^9 * 5^4 * 7^3 * 11^2 * 13 * 17 * 19");
    }
}