<?php

function sumValue()
{
    for ($i = 0; $i < 9; $i++) {
        $tab1[$i] = readline("enter a value");
        $tab2[$i] = readline("enter a value");
    }
    for ($i = 0; $i < 9; $i++) {
        $tab3[$i] = $tab1[$i] + $tab2[$i];
        echo ($tab3[$i]) . "\n";
    }
}


sumValue();
