<?php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(array &$nums1, int $m, array $nums2, int $n)
    {
        $m--;
        $n--;
        while ($m >= 0 && $n >= 0) {
            if ($nums1[$m] > $nums2[$n]) {
                $nums1[$m + $n + 1] = $nums1[$m];
                $m--;
            } else {
                $nums1[$m + $n + 1] = $nums2[$n];
                $n--;
            }
        }
        while ($n >= 0) {
            $nums1[$n] = $nums2[$n];
            $n--;
        }
        return join(',', $nums1);
    }
}

$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;

(new Solution())->merge($nums1, $m, $nums2, $n);
print_r($nums1);