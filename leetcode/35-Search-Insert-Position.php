<?php

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
        $right = count($nums) - 1;
        if ($nums[$left] > $target) {
            return $left;
        }
        if ($nums[$right] < $target) {
            return $right + 1;
        }


        while ($left < $right) {
            $mid = intval($left + ($right - $left) / 2);
            if ($nums[$mid] === $target) {
                return $mid;
            }
            if ($nums[$mid] > $target) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        return $right + 1;
    }
}

echo (new Solution())->searchInsert([1, 3, 5, 6], 2);