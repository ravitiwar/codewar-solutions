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

$friends1 = ["A1", "A2", "A3", "A4", "A5"];
$fTowns1 = [["A1", "X1"], ["A2", "X2"], ["A3", "X3"], ["A4", "X4"]];
$distTable1 = ["X1" => 100.0, "X2" => 200.0, "X3" => 250.0, "X4" => 300.0];
echo tour($friends1, $fTowns1, $distTable1);