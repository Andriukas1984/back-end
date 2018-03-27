<?php


$tekstas = ['Jonas', 'Petras', 'Antanas', 'Juozas'];

function raides($r){
	for($i=0; $i<count($r); $i++){
		$r[$i] = substr($r[$i], 0, 1);
}
return $r;
}


echo json_encode (raides($tekstas));


