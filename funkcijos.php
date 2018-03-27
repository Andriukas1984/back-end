<?php

function daugyba($a, $b){

	$c = $a * $b;
	echo $c . "<br>";
}

function dg($a, $b){

	$c = $a * $b;
	return $c;
}
daugyba(2, 4);
daugyba(3, 6);

echo dg(4, 5)  / 6 . '<br>';

function lp($x, $y = 2){

	return $x**$y;
}
echo lp(2) . '<br>';
echo lp(2, 3) . '<br>';


?>