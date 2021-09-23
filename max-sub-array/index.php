<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function maxSubArray($nums): int
{
    $max_so_far = PHP_INT_MIN;
    $max_ending_here = 0;

    for ($i = 0; $i < count($nums); $i++) {
        $max_ending_here = $max_ending_here + $nums[$i];
        $max_so_far = max($max_so_far, $max_ending_here);

        if ($max_ending_here < 0)
            $max_ending_here = 0;
    }
    return $max_so_far;
}

echo maxSubArray([-2,1,-3,4,-1,2,1,-5,4]);