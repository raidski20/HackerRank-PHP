<?php

function miniMaxSum($arr) {
    if(count($arr) > 5) {
        throw new Exception('Array size not supported');
    }
    
    $iterationsSums = [];
    $arrDup = [];
    
    foreach($arr as $key => $number)
    {
        $arrDup = $arr;
        unset($arrDup[$key]);
        
        $iterationsSums[] = array_sum($arrDup);
    }
        
    echo min($iterationsSums) . ' ' . max($iterationsSums);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
?>
