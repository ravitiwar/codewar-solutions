<?php

/**
 * Class Solution
 * @link https://leetcode.com/problems/two-sum/
 */
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums, int $target): array
    {
        $index = [];
        $minimum = PHP_INT_MAX;
        foreach ($nums as $parentIndex => $parentValue) {
            foreach ($nums as $childIndex => $chieldValue) {
                $temp_minimum = abs($target - ($parentValue + $chieldValue));
                if (($parentIndex != $childIndex) && $minimum > $temp_minimum) {
                    $minimum = $temp_minimum;
                    $index = [$parentIndex, $childIndex];
                }
            }
        }
        return $index;
    }
}