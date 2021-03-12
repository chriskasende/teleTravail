<?php
 
 function sum($n){
     $j=0 ;
     for($i=1;$i<=$n;$i++){
         $j=($j+$i);
             
     }
     echo "the result is  $j ";
 }
    $m=readline("enter a number");

     sum($m);
     
?>