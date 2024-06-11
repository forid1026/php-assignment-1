<!-- Given an integer n, find the sum of the digits of the integer.

Sample input 1:
62343
Sample output 1: 
18

Sample input 2:
1000
Sample output 2: 
1 -->


<?php
	 function calculateNumber($num){
       
        $negativeNumber = false;

        if ($num < 0) {
            $negativeNumber = true;
            $num = $num * -1;
        }

        $sum = 0;
        while($num > 0){
            $rem = $num % 10;
            $sum = $sum + $rem;
            $num = floor($num/10);
            
        }

        // parse negative sign if number is negative
        $negativeNumber == true ? $sum = -$sum : $sum;
        return $sum;
    } 
    
    $num = 62343;
    echo calculateNumber($num);

?>