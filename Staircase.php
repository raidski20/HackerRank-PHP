<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

$handle = fopen ("php://stdin", "r");

function staircase($n) {
    
    for ($i = 1; $i <= $n; $i++) {
        $spaces = str_repeat(' ', $n - $i);
        $hashes = str_repeat('#', $i);
        echo $spaces . $hashes . PHP_EOL;
    }
}

echo 'Enter staircase size: ';
fscanf($handle, "%i",$n);

staircase($n);

