<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    sort($arr, SORT_NUMERIC);
    $min_sum = 0;
    $max_sum = 0;
    
        for ($i = 0; $i <= (count($arr) - 2); $i++) { 
            $min_sum = $min_sum + $arr[$i];
        } 
        for ($i = 1; $i < count($arr); $i++) { 
            $max_sum = $max_sum + $arr[$i];
        }
  
    echo $min_sum . ' ' . $max_sum;
}

$arr_temp = rtrim("1 3 6 1 6");

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

(int) ((0.1+0.7)*10);