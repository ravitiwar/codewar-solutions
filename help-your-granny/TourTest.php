<?php
use  PHPUnit\Framework\TestCase;

class TourTest extends TestCase
{
    function testTour()
    {
        require 'index.php';
        $friends1 = ["A1", "A2", "A3", "A4", "A5"];
        $fTowns1 = [["A1", "X1"], ["A2", "X2"], ["A3", "X3"], ["A4", "X4"]];
        $distTable1 = ["X1" => 100.0, "X2" => 200.0, "X3" => 250.0, "X4" => 300.0];
        $this->assertEquals(889, tour($friends1, $fTowns1, $distTable1));
    }
}