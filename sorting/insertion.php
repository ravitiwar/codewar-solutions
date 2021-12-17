<?php
$array = [4, 3, 2, 10, 12, 1, 5, 6];
function sortInsertion($array)
{
    for ($i = 1; $i < count($array); $i++) {
        $current = $array[$i];
        $j       = $i - 1;
        while ($j >= 0 && $array[$j] > $current) {
            $array[$j + 1] = $array[$j--];
        }
        $array[$j + 1] = $current;
    }

    return $array;
}

echo '<pre>';
print_r(sortInsertion($array));
