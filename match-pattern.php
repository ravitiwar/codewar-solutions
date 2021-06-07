<?php
/**
 * @param  string  $s Text
 * @param  string  $p Pattern
 * @return bool
 */
function isMatch(string $s, string $p)
{
    $match = "";
    preg_match("/$p/", $s, $match);
    if (isset($match[0])) {
        return ($match[0] == $s);
    } else {
        return false;
    }
}