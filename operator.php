<?php
//aritmetines
$a = 1;
$b = 2;
$c = $a + $b;
echo $c."<br>";

$c = $a - $b;
echo $c."<br>";
$c = $a * $b;
echo $c."<br>";
$c = $a / $b;
echo $c."<br>";
$c = $a ** $b;
echo $c."<br>";

//priskyrimas

$x = 1;
$x = $x +5;
echo $x . "<br>";

//rezultatas tas pats

$x = 1;
$x += 5;
echo $x . "<br>";
// sulyginimas

$x = 5;
$y =5;

$z = $x == $y;
var_dump($z);

$z = $x !== $y;
var_dump($z);

//loginiai operatoriai

$a = 6 > 5;
$b = 8 > 7;
var_dump($a && $b);

$a = 6 > 5;
$b = 6 > 7;
var_dump($a || $b);

// xor visada vienas turi buti true vienas false

$a = true; $b = true; $c = false;
var_dump($a && $b && $c); //bus false
var_dump($a && $b && !$c); //bus true
var_dump(($a || $b) && $c);



?>