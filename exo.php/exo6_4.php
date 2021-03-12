<?php

      
 
 function multiple()
 {
     for ($i = 0; $i < 6; $i++) {
         $tab[$i] = $i*$i ;
     }
     return $tab;
 }
  print_r(multiple());
