<?php
/**
 * Created by PhpStorm.
 * User: lolo
 * Date: 24.03.2018
 * Time: 19:15
 */


$a = array(9,8,7,6,5,4,3,2,1,0,-1,10,11,-12,4,324,345,345,435,4355,44,34,5,345,345);

$len = count($a);
$imin = 0;
$imax = $len-1;
for ($i=0; $i<$len; $i++){
    for ($j=$i; $j < $len; $j++){
        if ($a[$j] < $a[$imin]){
            $imin = $j;
        }
        if ($a[$j] > $a[$imax]){
            $imax = $j;
        }
    }
    if ($imin !== $len-1 || $imax !== $i){
        $tmp = $a[$i];
        $a[$i] = $a[$imin];
        $a[$imin] = $tmp;
    }

    $tmp = $a[$len-1];
    $a[$len-1] = $a[$imax];
    $a[$imax] = $tmp;

    $len--;
    $imin = $i+1;
    $imax = $len-1;
}
