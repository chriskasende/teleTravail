<?php
$quantite = readline("enter number ");
$price;
if ($quantite<11){
    $price=0.1*$quantite;
  }  else if ($quantite<31){
        $price=1+($quantite-10)*0.09;
        
    }else{ $price=1+(20*0.09)+($quantite-30)*0.08;
    }



?>