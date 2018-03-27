<?php

$m = ['jonas', 'petras', 'antanas'];
var_dump($m);

$m[1] = 'juozas';
var_dump($m);

$m[3] = 'juozapas';
var_dump($m);

$m[] = 'andrius';
var_dump($m);

$mm = $m;
unset ($m[1]);
var_dump($m);

array_splice($mm, 1, 1);
var_dump($mm);
// asociatyvus masyvai


$a = ['bmw' => 10000, 'audi' => 8000, 'hyunday' => 3000];
var_dump($a);

$a['bmw'] = 12000;
unset($a['hyunday']);
$a['ford'] = 7000;
var_dump($a);


$s = 0;
foreach ($a as $key => $value) {
	$s += $value;
}
echo $s / count($a);




?>