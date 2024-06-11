<?php  
function printPyramid(int $num){
    if($num < 0){
        return "Please Insert Positive Number!";
    }
    $row = $num;
    $col = $num;

    for ($i = 1; $i <= $row; $i++) {
        for ($j = 1; $j <= $col; $j++) {
            echo ($j <= $row-$i) ? ' ' : '*';
        } echo "\n";
        $col++;
    }
     
}

echo printPyramid(5);