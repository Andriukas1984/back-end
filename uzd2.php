<?php

$sk = [5, 2, 3, 4, 9];


function sk($a){
$s = 0;
foreach ($a as  $value) {
	$s += $value;
}

return $s / count($a);

}

echo sk($sk) . '<br>';
echo sk([5, 6, 9]);