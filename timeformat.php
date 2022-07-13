<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    return date("H:i:s", strtotime($s));
}

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");

// $s = rtrim(fgets(STDIN), "\r\n");
$s = '12:01:00AM';

$result = timeConversion($s);
echo $result;
// fwrite($fptr, $result . "\n");

// fclose($fptr);
