<?php

echo "abc" . '<br>';
echo "abc\x61" . '<br>';
$x = ' labas rytas ';
echo "Laikrastis raso: $x" . '<br>';
echo "Laikrastis raso: {$x}" . '<br>'; //100% garantuota

$t = <<<EOD
Labas rytas
stai ir as
EOD;

echo $t;


?>