<?php
function note()
{
    for ($i = 0; $i < 9; $i++) {
        $tab[$i] = readline("enter a note ");
    }
    return $tab;
}
function afficheTab($x)
{
    for ($i = 0; $i < count($x); $i++) {
        echo ($i . " " . $x[$i] . "\n");
    }
}

afficheTab(note());
