<?php
function getMinimumNumber($numbers){
    $array_numbers = explode(" ", $numbers);
    
    $min = $array_numbers[0];
    for ($i=0; $i < count($array_numbers); $i++) { 
        $absolute = abs($array_numbers[$i]);
        if($absolute <= $min){
            $min = $absolute;
        }
    }
    return $min;
} 
$numbers = "10 -12 34 12 -3 123";
echo getMinimumNumber($numbers);
