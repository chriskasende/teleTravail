<?php
$age = readline("enter age") ;
$sex = readline("enter sex");
$estFemmeImposable  ;
$estHommeImposable  ;

$estFemmeImposable =$sex ="F" && $age>18 && $age <35;
$estHommeImposable =$sex = "H " && $age>20;
 if($estFemmeImposable || $estHommeImposable){
     echo("imposable");
 } else {
     echo("non imposable");
 }


?>