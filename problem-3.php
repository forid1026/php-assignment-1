
<?php
$string = 'I Love Programming';

function reverseEachWord($string)
{
    $reverse = [];

    $newString = explode(" ", $string);

    for ($i = 0; $i < count($newString); $i++) {
        $reverse[] = strrev($newString[$i]);
    }
    $result = implode(" ", $reverse);
    return $result;
}

echo reverseEachWord($string);
?>