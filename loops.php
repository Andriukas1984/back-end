<?php
// while

$a = 0;
$b = 7;

while ($a < $b) {
	echo $a++ . "<br>";
}
echo " baigta <br>";

// do while
$a = 0;
$b = 7;

do {
	echo $a++ . "<br>";
} while ($a < $b);
echo " baigta <br>";


//for

$b = 7;
for ($a = 0; $a<$b; $a++){
	echo $a . '<br>';
}
echo 'baigta';
echo '<br>';
//foreach

$m = [1, 2, 8, 4, 5];

foreach ($m as $z) {
	echo $z . ' **2 = ' . $z**2 . '<br>';
}

foreach ($m as $z) {
	if ($z>6) break;
	echo $z . ' **2 = ' . $z**2 . '<br>';
}
foreach ($m as $z) {
	if ($z>6) continue;
	echo $z . ' **2 = ' . $z**2 . '<br>';
}


?>