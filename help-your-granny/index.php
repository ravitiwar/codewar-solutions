<?php
function tour($friends, $fTowns, $distTable)
{
    $totalDistance = 0;
    $formatedTowns = [];
    foreach ($fTowns as $fTown) {
        $formatedTowns[$fTown[0]] = $fTown[1];
    }

    $i = 0;
    foreach ($friends as $friend) {
        ++$i;
        $validTown = isset($formatedTowns[$friend]);
        if ($validTown && isset($formatedTowns[$friends[$i]])) {
            $totalDistance += sqrt((pow($distTable[$formatedTowns[$friends[$i]]],
                    2) - pow($distTable[$formatedTowns[$friend]],
                    2)));
        } else {
            if (!$validTown) {
                unset($friends[$i - 1]);
            }
        }

    }
    return floor($totalDistance + $distTable[$formatedTowns[current($friends)]] + $distTable[$formatedTowns[end($friends)]]);
}