<?php

/**
 * Class Solution
 * @link https://leetcode.com/problems/longest-substring-without-repeating-characters/
 */
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $pointer_1 = 0;
        $pointer_2 = 0;
        $max = 0;
        $has_set = [];

        while ($pointer_2 < strlen($s)) {
            if (!in_array($s[$pointer_2], $has_set)) {
                $has_set[] = $s[$pointer_2];
                $pointer_2++;
                $max = max(count($has_set), $max);
            } else {
                unset($has_set[array_search($s[$pointer_2],$has_set)]);
                $pointer_1++;
            }
        }
        return join($has_set);
    }
}


echo (new Solution())->lengthOfLongestSubstring("pwwkew");