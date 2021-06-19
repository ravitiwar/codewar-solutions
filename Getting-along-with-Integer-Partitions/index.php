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