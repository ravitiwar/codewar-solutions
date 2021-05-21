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


echo same_structure_as([1, 1, 1], [2, 2, 2]); // => true
echo same_structure_as([1, [1, 1]], [[2, 2], 2]); //false
