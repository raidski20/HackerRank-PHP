<?php

function stringConstruction($s) {
    $p = '';
    $cost = 0;

    for($i = 0; $i < strlen($s); $i++)
    {
        if(strpos($p, $s[$i]) === false) {
            $p .= $s[$i];
            $cost++;
        }
        else
        {
            $p .= $s[$i];
        }
    }

    return $cost;
}

$stdin = fopen("php://stdin", "r");

echo 'Enter string to copy: ';
fscanf($stdin, "%s", $s);

echo "Cost is: " . stringConstruction($s) . PHP_EOL;

fclose($stdin);

