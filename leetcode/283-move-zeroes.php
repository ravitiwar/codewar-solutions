<?php

/**
 * Class Solution
 * @link https://leetcode.com/problems/move-zeroes/
 */
class Solution
{

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums)
    {
        $i = 0;
        foreach ($nums as $index => $num) {
            if ($num != 0) {
                $temp = $nums[$index];
                $nums[$index] = $nums[$i];
                $nums[$i] = $temp;
                $i++;
            }
        }
    }
}

$nums = [0, 1, 0, 3, 12];
(new Solution())->moveZeroes($nums);
echo '<pre>';
print_r($nums);