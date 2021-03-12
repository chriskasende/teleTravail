<?php
$jour= readline("jour");
$mois= readline("mois");
$année= readline("année");
 echo("saisir la date" .$jour .$mois .$année);
 $estBisextile;
 $estDateBisextyleInvalide;
 $estDateMois30Invalide;
 $estBisextile= (($année % 4)==0 && ($année % 100 !=0)) || ($année % 400==0);
 $estDateBisextyleInvalide= $mois=2 &&(($estBisextile && $jour>29)||(!$estBisextile && $jour>28));
 $estDateMois30Invalide= $jour >30 && ($mois== 4 || $mois== 6 || $mois==9 || $mois==11);
 if ($jour>31 ||$mois==12 ||$estDateBisextyleInvalide ||$estDateMois30Invalide){
     echo("date invalide");
 } else {
     echo("date valide");
 }

?>