<?php


$tekstai = ['Jonas', 'Petras', 'Antanas', 'Juozas'];

function pakeisti($a, $x){
	for($i=0; $i<count($a); $i++){
		$a[$i] = str_replace($x, ' ', $a[$i]);
	}
	return $a;
}
echo json_encode (pakeisti($tekstai, 'a'));



