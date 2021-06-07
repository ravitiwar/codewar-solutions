<?php
function findMedianSortedArrays($nums1, $nums2)
{
    $merged_array = array_merge($nums1, $nums2);
    asort($merged_array);
    $merged_array = array_values($merged_array);
    $number_of_elements = count($merged_array);
    return ($number_of_elements & 1) ? $merged_array[(intval($number_of_elements / 2))] : ($merged_array[((intval($number_of_elements) / 2) - 1)] + $merged_array[(intval($number_of_elements) / 2)]) / 2;
}