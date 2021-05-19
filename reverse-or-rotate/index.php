<?php
function revrot($s, $sz)
{
    if($sz<1||empty($s)){
        return  "";
    }
    return join(array_map(function ($sub_str)use($sz){
        if(strlen($sub_str)!=$sz){
            return "";
        }
        $cube_sum=array_sum(array_map(function($no){
            return pow($no,3);
        },str_split($sub_str)));
        return (($cube_sum%2)!==1)?strrev($sub_str):substr($sub_str, 1) . substr($sub_str, 0, 1);
    },str_split($s,$sz)));
}