<?php
$pi_val = 2;

$x = 2;
$y = 5;
$area = cal($x, $y ) * 2;
echo $area;
//cal($x , $y);
//echo "Ahmed";
/*
function Ahmed () {

    echo "Ahme Asiri ";
}
*/
function cal($x , $y) {
    // عشان اعرف متغير 
    global $pi_val;
     $z = ( $x + $y) * $pi_val;
     return $z;
}


?>