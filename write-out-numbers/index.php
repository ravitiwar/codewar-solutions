<?php
function number2words(int $n): string
{
    if ($n < 1) {
        return "zero";
    }
    $ones = array(
        "",
        "one ",
        "two ",
        "three ",
        "four ",
        "five ",
        "six ",
        "seven ",
        "eight ",
        "nine ",
        "ten ",
        "eleven ",
        "twelve ",
        "thirteen ",
        "fourteen ",
        "fifteen ",
        "sixteen ",
        "seventeen ",
        "eighteen ",
        "nineteen "
    );
    $tens = array(
        "",
        "",
        "twenty",
        "thirty",
        "forty",
        "fifty",
        "sixty",
        "seventy",
        "eighty",
        "ninety"
    );
    $sufix_mapping = [

        3 => 'hundred ',
        4 => 'thousand ',
    ];
    $chunk = 3;
    $excluded = [];
    $n = (string)$n;
    $n = str_split($n);
    if ($r = count($n) % $chunk) {
        for ($i = 0; $i < $r; $i++) {
            $excluded[$i] = $n[$i];
            unset($n[$i]);
        }
    }
    $n = array_chunk($n, $chunk);
    if (!empty($excluded)) {
        array_unshift($n, $excluded);
    }
    $num_to_words = "";
    foreach (array_reverse($n) as $key => $value) {
        $word = "";
        $value = (int)join($value);
        $x = (int)str_pad('1', strlen((string)$value) + 1, 0);
        if ($value > 19) {
            while ($x >= 10) {
                $length_of_sufix = strlen((string)$x);
                $r = $value % $x;
                $q = (int)($value / $x);
                if ($value > 19) {
                    if ($x == 10) {
                        $word .= $tens[$q];
                        $word .= ($r && strlen($tens[$q])) ? "-{$ones[$r]}" : $ones[$r];
                    } else {
                        $word .= $q ? "{$ones[$q]}{$sufix_mapping[$length_of_sufix]}" : "";
                    }
                } else {
                    $word .= "$ones[$value]";
                }
                $x = $x / 10;
                $value = $r;
            }
        } else {
            $word .= "$ones[$value]";
        }


        $sufix = ($key > 0) ? "{$sufix_mapping[$key+3]}" : "";
        $num_to_words=trim($num_to_words);
        $word=trim($word);
        $num_to_words = "{$word} {$sufix}{$num_to_words}";
    }
    return trim($num_to_words);
}