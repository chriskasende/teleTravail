<?php
$age=readline("enter age");
$date=readline("enter date of licence");
$accident= readline("enter");
$i

if ( $age >25 && $date <2 && $accident==0){ 
    echo("tarif rouge");
    
} else if ($age <25 && $date>2 && $accident=0 || $age>25 && $date<2 && $accident=0 ){
    echo("tarif orange");

}else if ($age>25 && $date>2 ){
   if ( $accident=0){
  echo("tarif vert");
   if ($accident=1){
   echo ("tarif orange");
  }  else if ($accident=2){
      echo("tarif rouge");
  }
}  
?>