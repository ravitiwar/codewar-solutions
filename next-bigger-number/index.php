<?php
function nextBigger($n)
{
    $numbers = str_split((string)$n);
    $numbers = array_reverse($numbers);
    $temp = [];
    foreach ($numbers as $index => $number) {
        unset($numbers[$index]);
        $temp[] = $number;
        if (isset($numbers[$index + 1]) && ($number > $numbers[$index + 1])) {
            asort($temp);
            foreach ($temp as $i => $number) {
                if ($number > $numbers[$index + 1]) {
                    $temp[] = $numbers[$index + 1];
                    $numbers[$index + 1] = $number;
                    unset($temp[$i]);
                    asort($temp);
                    break;
                }
            }
            break;
        }
    }
    return empty($numbers) ? -1 : ((int)(join(array_reverse($numbers)) . join($temp)));
}