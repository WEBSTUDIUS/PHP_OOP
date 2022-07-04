<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $arr_count = count($arr);
    if ($arr_count == 0) {
        echo "ERROR: Invalid number of arguments";
        exit;
    }
    $zero = 0;
    $overzero = 0;
    $subzero = 0;
    foreach ($arr as $key => $val) {
        if($val < 0 && $val >= -100) {
            $subzero++;
        }
        if($val > 0 && $val <= 100) {
            $overzero++;
        }
        if($val == 0) {
            $zero++;
        }
        if($val < -100 || $val > 100) {
            echo "ERROR: Invalid value $val (must be between -100 and 100) in position $key . It will be removed from the final calc of results <br><br>";
        }
    }
    echo "The Results: <br>";
    echo bcdiv($overzero, $arr_count, 6).'<br>';
    echo bcdiv($subzero, $arr_count, 6).'<br>';
    echo bcdiv($zero, $arr_count, 6).'<br>';

}

// $n = intval("1 2 3 -4 0 -5");

$arr_temp = rtrim("1 2 3 -4 0 -500");

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);