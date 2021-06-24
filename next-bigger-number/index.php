<?php
function nextBigger($n)
{
    $numbers = [];
    $i = 1;
    while (($n / 10) > 0) {
        $q = intval($n / 10);
        $r = $n % 10;
        $max = empty($numbers) ? 0 : max($numbers);
        if ($max > $r) {
            $n = intval($q / 10);
            $n = $n * $i;
            $numbers[] = $r;
            break;
        }
        $i *= 10;
        $numbers[] = $r;
        $n = $q;
    }
    asort($numbers);
    foreach ($numbers as $index => $number) {
        if ($number > $r) {
            $number *= ($i / 10);
            unset($numbers[$index]);
            break;
        }
    }
    $numbers = (int)join($numbers);
    return $n ? $n + $numbers : -1;
}

