<?php
function note()
{
    for ($i = 0; $i < 9; $i++) {
        $tab[$i] = readline("enter a note ");
    }
    return $tab;
}
function moyenne($array)
{
    //$arraySize =readline("enter note");
    $arraySize = count($array);
    $somme = 0;
    for ($i = 0; $i < $arraySize; $i++) {
        $somme = $somme + $array[$i];
    }
    $m = $somme / $arraySize;
    return $m;
}
echo ("the average is " . moyenne(note()));
