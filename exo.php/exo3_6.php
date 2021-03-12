<?php
$a=readline("enter a age");
if($a<6){
    echo("too young");

} else if($a>=6 && $a>=7){
    echo("poussin");
}else if ($a>=8 && $a<=9){
    echo("pupille");
} else if($a>= 10 &&$a<=11){
     echo("minime");

} else {
    echo ("cadet");
}
?>