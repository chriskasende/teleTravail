<?php



$i = 1;
do {
    $nombre=readline("entrer nombre");
    if($nombre != 0){
        if($i = 1) {
        $max = $nombre;
        $indiceMax = 1;
        }
        if($nombre > $max){
            $max = $nombre;
            $indiceMax = $i;
        }
        $i++;
    }

} while ($nombre != 0);
if($nombre = 0){
    echo("Vous avez quittez le programme.");
}else {
    echo("La plus grande valeur est :  $max" );
}
