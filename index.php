<?php

$a = [0,1,2,3,4,5,6,7,8,9];     //a.

$a = array_reverse($a);         //b.
foreach ($a as $value) {
   echo $value."\n";
}

function x2($arr){              //c.   
    foreach ($arr as &$value) {
        $value *= 2; 
    }
return $arr;
}

$b = [];
$b = array_merge($b, x2($a));   //d.
var_dump($b);
