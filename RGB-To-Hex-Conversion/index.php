<?php
function rgb($v1, $v2, $v3)
{
    return join(array_map(function ($v) {
        $v = ($v > 255) ? 255 : $v;
        return strtoupper(sprintf("%02s",($v < 0) ? '00' : (string)dechex(round($v))));
    }, func_get_args()));
}