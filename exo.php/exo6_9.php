<?php

function note()
{
    for ($i = 0; $i < 9; $i++) {
        $tab[$i] = readline("enter a note ");
    }
    return $tab ;
}
function sum($tab){
$s=0 ;
    for ($i=0;$i<9;$i++){
         $s=$s+$tab[$i];
    } 
    echo "the sum is " . $s ;
}
   sum(note());
