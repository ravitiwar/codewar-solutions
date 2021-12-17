<?php

class Solution
{
    function twoSum($nums, $target)
    {
        $indexOfLastnumber = null;
        foreach ($nums as $i => $num) {
            $tempNums=$nums;
            $tempNums[$i]="-";
            $temp = $target - $num;
            if (in_array($temp, $tempNums)) {
                $indexOfLastnumber = array_search($temp, $tempNums,true);
                echo '<pre>';
                print_r([
                    '$indexOfLastnumber'=>$indexOfLastnumber,
                    '$temp'=>$temp,
                    '$tempNums'=>$tempNums,
                    'ttt'=>array_search($temp, $tempNums),
                ]);
                echo '</pre>';
                break;
            }
        }

        return join([$i, $indexOfLastnumber]);
    }
}

$ar = [0,4,3,0];
echo (new Solution())->twoSum($ar, 0);