<?php

/**
 * Class Solution
 * @link https://leetcode.com/problems/squares-of-a-sorted-array/
 */
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums)
    {
        foreach ($nums as $index => $num) {
            $nums[$index] = $num * $num;
        }
        asort($nums);
        return $nums;
    }
}
