<?php

define('portalas', 'www.delfi.lt');
define('pi', 3.1415926);

echo portalas . '<br>';

echo portalas . ' yra geras' . '<br>';

echo 7 * pi . '<br>';

function d($x){
	return $x * pi;
}
echo d(3) . '<br>';


function prt($arg){
	echo $arg . '<br>';
}
prt('labas');

$a = 'aaaa';					//skaiciuoja masyvo ilgi
var_dump($a);

$m = ['bmv', 'audi', 'honda'];
var_dump($m);

print_r($m); 

echo json_encode($m);





?>