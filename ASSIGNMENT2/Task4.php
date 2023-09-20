<?php

function fibonacci(int $count){
$veryold = 0;

$old = 1;



for($i=0;$i<$count;$i++){

    
echo $veryold."\n";
$new = $old + $veryold;

$old = $new;

$veryold= $old;}
}
fibonacci(15);