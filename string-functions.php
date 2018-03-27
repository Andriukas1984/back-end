<?php

$s = " Labas rytas ";
echo  '"'. ($s) . '"<br>';
echo  '"'.trim($s) . '"<br>';

echo  '"'.ltrim($s) . '"<br>';
echo  '"'.rtrim($s) . '"<br>';


echo strlen($s); //skaiciuoja kiek yra simboliu

echo strtolower($s);
echo strtoupper($s);

$a ="Labas rytas";

echo ucfirst($a) . "<br>";
echo ucwords($a) . "<br>";

echo str_shuffle($a) . "<br>";

echo strtoupper("asdsd");

echo mb_strtoupper("asdsd") . '<br>';

//echo sprintf('Labas %s, %a', "rytas") . '<br>';

$d = "abc";
$e = "cdr";
echo strcmp($d, $e);





