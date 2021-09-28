<?php

/**
 * Class Solution
 * @link  https://leetcode.com/problems/search-insert-position/
 */
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert(array $nums, $target)
    {
        $left = 0;
        $right = sizeof($nums) - 1;
        $ans = -1;
        while ($left <= $right) {
            $mid = intval($left + ($right - $left) / 2);
            if ($nums[$mid] === $target) {
                return $mid;
            }
            if ($nums[$mid] > $target) {
                $right = $mid - 1;
                $ans = $mid;
            } else {
                $ans = $left = $mid + 1;
            }
        }
        return $ans;
    }
}

echo (new Solution())->searchInsert([1, 3, 5, 6], 7);