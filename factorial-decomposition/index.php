<?php
function decomp($n)
{
    $decomp = "";
    $factotrial = [];
    while ($n > 1) {
        $p = 2;
        $temp = $n;
        while ($temp >= 2) {
            if (($temp % $p) < 1) {
                $factotrial[$p] = isset($factotrial[$p]) ? $factotrial[$p] + 1 : 1;
                $temp /= $p;
                $p = 2;
            } else {
                $p++;
            }
        }
        --$n;
    }
    ksort($factotrial);
    $i = 0;
    foreach ($factotrial as $k => $value) {
        $decomp .= ($value > 1) ? "{$k}^{$value}" : "{$k}";
        if (++$i != count($factotrial)) {
            $decomp .= " * ";
        }
    }
    return $decomp;
}