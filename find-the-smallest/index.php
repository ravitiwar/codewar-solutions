<?php
function smallest($n)
{
    $i = 0;
    $temp = $number_in_array = str_split((string)$n);
    $min = min($number_in_array);
    while ($temp[$i] <= $min) {
        unset($temp[$i]);
        $min = min($temp);
        $i++;
    }
    $index_of_min = strripos((string)$n, $min);
    unset($number_in_array[$index_of_min]);
    array_splice($number_in_array, $i, 0, $min);
    if ($index_of_min == 1 && $index_of_min > $i) {
        list($i, $index_of_min) = [$index_of_min, $i];
    }
    return [(int)join($number_in_array), $index_of_min, $i];

}
