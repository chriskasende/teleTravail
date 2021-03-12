<?php
  

  function multuply($n){
      for($i=1 ; $i<=10; $i++){
        $result=($n*$i) ;
        echo("$n*$i = $result\n " );
      }
  }
   $n=readline("enter a number");
   multuply($n);
?>