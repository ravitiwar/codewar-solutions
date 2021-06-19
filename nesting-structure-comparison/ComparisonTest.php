<?php


class ComparisonTest extends \PHPUnit\Framework\TestCase
{
    public function testDescriptionExamples()
    {
        require 'index.php';
        $this->assertTrue(same_structure_as([1, 1, 1], [2, 2, 2]));
        $this->assertTrue(same_structure_as([1, [1, 1]], [2, [2, 2]]));
        $this->assertFalse(same_structure_as([1, [1, 1]], [[2, 2], 2]));
        $this->assertFalse(same_structure_as([1, [1, 1]], [[2], 2]));
        $this->assertTrue(same_structure_as([[[], []]], [[[], []]]));
        $this->assertFalse(same_structure_as([[[], []]], [[1, 1]]));
    }
}