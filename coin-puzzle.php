<?php

$coins = [1, 2, 5, 8];
$needChange = 3;
function minChange($coins, $amount, &$storage)
{
    if ($amount < 0) {
        return $amount;
    }
    if ($amount == 0) {
        return 0;
    }

    if (isset($storage[$amount])) {
        return $storage[$amount];
    }
    $min = PHP_INT_MAX;
    foreach ($coins as $coin) {
        $changeRes = minChange($coins, $amount - $coin, $storage);
        echo '<pre>';
        print_r([
            '$changeRes' => $changeRes,
            '$min' => $min,
            '$coin' => $coin,
            '$amount' => $amount,
            '$storage' => $storage,
        ]);
        echo '</pre>';
        if ($changeRes >= 0 && $changeRes < $min) {
            $min = 1 + $changeRes;
        }
    }
    return $storage[$amount] = ($min === PHP_INT_MAX) ? -1 : $min;
}

$storage = [];
echo minChange($coins, $needChange, $storage);
echo '<pre>';
print_r($storage);