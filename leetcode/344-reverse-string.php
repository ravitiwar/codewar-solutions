<?php

/**
 * Class Solution
 * @link https://leetcode.com/problems/reverse-string/
 */
class Solution
{

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s)
    {
        $left = 0;
        $right = count($s) - 1;
        while ($left <= $right) {
            $temp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $temp;
            $left++;
            $right--;
        }
    }
}

$str = ["H","a","n","n","a","h"];
(new Solution())->reverseString($str);
echo join($str);