<?php

$n= readline("enter a number");

do
 if ($n<10){
     echo("higher\n");
     $n=readline("enter a number\n");
 }else if ($n>20){
     echo("lower\n");
     $n=readline("enter a number \n");
 } while ($n<10 || $n>20);
  echo("rigth number");



?>