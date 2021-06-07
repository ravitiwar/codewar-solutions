<?php
function recursive($ar, &$output, &$max)
{
    $max = max($ar);
    while ($max > 1) {
        $key = array_search($max, $ar);
        $ar[$key] = $ar[$key] - 1;
        $ar[] = 1;
        $output[] = $ar;
        recursive($ar, $output, $max);
    }
    return $output;
}

function enum($no)
{
    $outout = [];
    $i=1;

}

echo '<pre>';
print_r(enum(7));
/*
 * 7,0
 * 6,1
 * 5,2
 * 4,3
 * 4,2,1
 * 4,1,1,1
 * 3,2,1,1
 * 3,1,1,1,1
 * 2,1,1,1,1,1
 * 1,1,1,1,1,1,1
 */