<?php

function timeConversion($s) {
    $time= explode(":", $s);
    $pos = strpos(end($time), 'PM');

    $hr = $time[0];
    $min = $time[1];
    $sec = intval(end($time));

    if ($pos === false) {
        $hr = ($hr == 12) ? '00' : $hr;
    } else {
        $hr = ($hr == 12) ? 12 : (12 + $hr);
    }

    $sec = ($sec < 10) ? "0$sec" : $sec;

    return $hr . ':' . $min. ':' . $sec;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
