<?php

function Forloop_PrintEvenNumbers( int $start, int $step, int $end) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo "$i\n";}
            else {echo $i= ($i+1)."\n"; }
              
    }
    echo "==============\n";
}
Forloop_PrintEvenNumbers('0','2','20');



function Whileloop_PrintEvenNumbers( int $start, int $step, int $end){
    $i = $start;
    while( $i <= $end){
        if ($i % 2 == 0) {
            echo "$i\n";}
            else {echo $i= ($i+1)."\n"; }
            $i+=$step; 
    }
    echo "==============\n";
    }
    Whileloop_PrintEvenNumbers('20','2','40');

  

    function DoWhileloop_PrintEvenNumbers( int $start, int $step, int $end){
        $i = $start;    
do{  
    if ($i % 2 == 0) {
        echo "$i\n";}
        else {echo $i= ($i+1)."\n"; }
        $i+=$step; 
   }while( $i <= $end);
   echo "==============\n"; }
                    DoWhileloop_PrintEvenNumbers('40','2','60');