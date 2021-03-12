<?php
  function factorielle($f){
      $result=1;
      for($i=1;$i<=$f;$i++){
          $result= ($result*$i);
      }
        return $result ;
    }
    $number=readline("enter a number");
    echo("the fartorielle of $number is ".factorielle($number));
  

?>