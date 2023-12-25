<?php

$handle = fopen ("php://stdin", "r");

function compareTriplets($aliceArr, $bobArr) {
    
    if(count($aliceArr) !== count($bobArr)) {
        throw new exception('Both arrays must have the same length');
    }
    
    $aliceScore = 0;
    $bobScore = 0;
    
    foreach ($aliceArr as $key => $value)
    {
        if($aliceArr[$key] < $bobArr[$key]) {
            $bobScore++;
        } elseif($aliceArr[$key] > $bobArr[$key])  {
            $aliceScore++;
        }
    }
    
    return [$aliceScore, $bobScore];
}

echo 'Enter Alice\'s array size: '; 
fscanf($handle, "%i",$n);
$aliceArr = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $aliceArr[] = explode(" ",$a_temp);
   $aliceArr[$a_i] = array_map('intval', $aliceArr[$a_i]);
}

echo 'Enter Bob\'s array size: '; 
fscanf($handle, "%i",$n);
$bobArr = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $bobArr[] = explode(" ",$a_temp); 
   $bobArr[$a_i] = array_map('intval', $bobArr[$a_i]); 
}

$result = compareTriplets($aliceArr, $bobArr);
echo $result[0] . ' ' . $result[1] . "\n";
