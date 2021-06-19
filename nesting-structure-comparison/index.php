<?php
function nest(&$ar)
{
    for ($i = 0; $i < count($ar); $i++) {
        if (is_array($ar[$i])) {
            nest($ar[$i]);
        } else {
            $ar[$i] = '-';
        }
    }
}

function same_structure_as($ar1, $ar2)
{
    nest($ar1);
    nest($ar2);
    return ($ar1 === $ar2);
}