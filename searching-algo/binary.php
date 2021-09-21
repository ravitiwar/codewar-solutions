<?php
$ar =  [3, 4, 5, 1, 2];;
$find = 1;

class BinarySearch
{
    public function searchIterative($ar, $find)
    {
        $length = count($ar);
        $left = 0;
        $right = $length - 1;
        while ($left <= $right) {
            $mid = round($left + (($right - $left) / 2));
            if ($ar[$mid] == $find) {
                return $mid + 1;
            } elseif ($find < $ar[$mid]) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        return false;
    }


    public function searchRecursive(array $ar, int $find, $left, $right)
    {
        if ($left > $right) {
            return false;
        }
        $mid = round($left + (($right - $left) / 2));
        if ($find == $ar[$mid]) {
            return $mid + 1;
        } elseif ($find < $ar[$mid]) {
            return $this->searchRecursive($ar, $find, $left, $mid - 1);
        } else {
            return $this->searchRecursive($ar, $find, $mid + 1, $right);
        }
    }
}

echo (new BinarySearch())->searchIterative($ar, $find);
echo '<br>';
echo (new BinarySearch())->searchRecursive($ar, $find, 0, count($ar) - 1);