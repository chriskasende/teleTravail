<?php


function schtroumph()
{
	$arraysize1 = readline("Entrez le nombre de valeurs du tableau 1 : ");
	for ($i = 0; $i < $arraysize1; $i++) {
		$tab1[$i] = readline("entrez la valeur numero " . ($i + 1) . " : ");
	}
	$arraysize2 = readline("Entrez le nombre de valeurs du tableau 2: ");
	for ($i = 0; $i < $arraysize2; $i++) {
		$tab2[$i] = readline("entrez la valeur numero " . ($i + 1) . " : ");
	}

	$s = 0;
	for ($i = 0; $i < $arraysize1; $i++) {
		for ($j = 0; $j < $arraysize2; $j++) {
			$s = $s + $tab1[$i] * $tab2[$j];
		}
	}
	echo $s;
}
schtroumph();
