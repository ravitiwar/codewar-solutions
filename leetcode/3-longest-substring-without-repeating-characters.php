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
        $s = str_split($s);
        $max_string = "";

    }
}

echo (new Solution())->lengthOfLongestSubstring('abcabcbb');

