<?php
function sum_strings($a, $b)
{
    $a = array_reverse(str_split($a));
    $b = array_reverse(str_split($b));
    $length_of_a = count($a);
    $length_of_b = count($b);
    $carry = 0;
    $sum_array = [];
    for ($i = 0; $i < max($length_of_b, $length_of_a); $i++) {
        $n_1 = isset($a[$i]) ? (int)$a[$i] : 0;
        $n_2 = isset($b[$i]) ? (int)$b[$i] : 0;
        $sum = $n_1 + $n_2 + $carry;
        if (($sum / 10) < 1) {
            $carry = 0;
        } else {
            $carry = intval($sum / 10);
            $sum = $sum % 10;
        }
        $sum_array[] = $sum;
    }
    $sum_array = array_reverse($sum_array);
    return ltrim(join($sum_array),"0");
}

echo sum_strings('1037', '').'<br>';
