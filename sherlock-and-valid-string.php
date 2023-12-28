<?php

function isValid($s) {
    
    $letterCounts = array_count_values(str_split($s));
    
    $uniqueValues = array_unique(array_values($letterCounts));
    
    $numberOfUniques = count($uniqueValues);
    
    
    switch($numberOfUniques)
    {
        case 0:
        case 1:
            return 'YES';
            break;
            
        case 2:
            $max = max($uniqueValues);
            $min = min($uniqueValues);
            
            $letterCountsFrequency = array_count_values($letterCounts);
           
           /**
            * For cases which are considered valide like:
    		* $count = {a=2, b=1} or {a=2, b=1, c=1} or 
    		*	{a=5, b=1} or {a=3,b=3,c=1}
            */
            
            if( ($min === 1) && ( 
                ($letterCountsFrequency[$min] === 1) || 
                (($letterCountsFrequency[$min] >= 1) && ($letterCountsFrequency[$max] === 1) && ($max - $min === 1))) 
            ) {
                return 'YES';
            }
            
            /**
             * For cases which are considered valide like:
             * $count = {a=5,b=4} or {a=3,b=2,c=2} or {a=8,b=7,c=7} ...etc
             * 
             * Other cases other not valide.
             */
             
            if( (($max - $min) === 1) && ($letterCountsFrequency[$max] === 1))  {
                return 'YES';
            } else {
                return 'NO';
            }
            
            break;
            
        default:
            return 'NO';
    }
}


$stdin = fopen("php://stdin", "r");

echo 'Enter a string to check if valide or no: ';
fscanf($stdin, "%s", $s);

echo "Is valid: " . isValid($s) . PHP_EOL;

fclose($stdin);
