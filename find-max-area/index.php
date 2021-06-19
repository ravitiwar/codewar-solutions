<?php
function maxArea($h, $w, $horizontalCuts, $verticalCuts)
{
    array_push($horizontalCuts, 0);
    array_push($verticalCuts, 0);
    asort($horizontalCuts);
    asort($verticalCuts);
    $horizontalCuts = array_values($horizontalCuts);
    $verticalCuts = array_values($verticalCuts);
    $horizontal_max = 0;
    $vertical_max = 0;
    $row = 0;
    $column = 0;
    foreach ($horizontalCuts as $horizontalCut) {
        ++$row;
        $row_count = isset($horizontalCuts[$row]) ? $horizontalCuts[$row] : $h;
        $horizontal_max = max(($row_count - $horizontalCut), $horizontal_max);
    }
    foreach ($verticalCuts as $verticalCut) {
        ++$column;
        $column_cnt = isset($verticalCuts[$column]) ? $verticalCuts[$column] : $w;
        $vertical_max = max(($column_cnt - $verticalCut), $vertical_max);
    }
    return $vertical_max * $horizontal_max;

}