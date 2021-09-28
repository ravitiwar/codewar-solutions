<?php

/**
 * Class Solution
 * @link https://leetcode.com/problems/reverse-words-in-a-string-iii/
 */
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        $str = [];
        foreach (explode(' ', $s) as $word) {
            $left = 0;
            $right = strlen($word) - 1;
            while ($left <= $right) {
                $temp = $word[$left];
                $word[$left] = $word[$right];
                $word[$right] = $temp;
                $left++;
                $right--;
            }
            $str[] = $word;
        }
        return join(' ', $str);
    }
}