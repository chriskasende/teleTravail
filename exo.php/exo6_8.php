<?php

   

   function fillArray($tab ,$size)
   {
       for ($i = 0; $i < $size; $i++) {
           $tab[$i] = readline("enter a number ");
       }
       return $tab;
   }  
   function comparer($tab,$i){
       $positifCount=0;
       $negatifCount=0 ;
       foreach($tab as $tab[]);
       if ($tab[$i]>0){
         $positifCount= $positifCount++ ;
    } else if ($tab[$i]<0) {
        $negatifCount= $negatifCount++ ;
    }
        return $negatifCount;
        return $positifCount;
   }
    $t=array();
    $size=readline("enter number");
    echo("your numbers" . comparer(fillArray($t,$size)));
