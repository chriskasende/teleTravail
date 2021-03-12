<?php

      $nombre=20;
  for ($i=1;$i<=$nombre;$i++) {
      if($i=1){
          $max=$nombre;
          $index=1;
      } 
       if ($nombre>$max){
          $max=$nombre;
          $index=$i;
      }
  } 
  $n=readline("enter a number");
  $m=readline("enter second number");
   echo("the higher number is $max ");
?>