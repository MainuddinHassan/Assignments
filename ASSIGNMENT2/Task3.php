<?php
$veryold = 0;

$old = 1;

$new = 1; 

for($i=0;$i<100;$i++){

    
echo $veryold."\n";

$old = $new;

$new = $old + $veryold;

$veryold= $old;
if($new>100)
{echo $veryold."\n";
 break;
}
}
