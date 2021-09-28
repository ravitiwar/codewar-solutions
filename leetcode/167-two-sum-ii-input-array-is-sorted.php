<?php

/**
 * Class Solution
 *
 * @link https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/
 */
class Solution
{

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target)
    {
        foreach ($numbers as $index => $number) {
            $temp = $target - $number;
            unset($numbers[$index]);
            if (in_array($temp, $numbers)) {
                return [$index + 1, array_search($temp, $numbers) + 1];
            }
        }
    }
}