<?php
function anagrams(string $word, array $words): array
{
    $word = str_split($word);
    sort($word);
    $output = [];
    foreach ($words as $wrd) {
        $temp = str_split($wrd);
        sort($temp);
        if ($word == $temp) {
            $output[] = $wrd;
        }
    }
    return $output;
}