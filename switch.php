<?php

$a = 5;

switch ($a) {
	case 1: echo 1; break;
	case 2: echo 2; break;
	case 3: echo 3; break;
		default: echo "kitas atvejis <br>";
}

$a = 2;

switch ($a) {
	case 1: echo 1; break;
	case 2: echo 2; break;
	case 3: echo 3; break;
		default: echo "kitas atvejis";
}

$a = "jonas";
switch ($a) {
	case 'jonas': echo "buvo ";
	
		case 'Petras': echo " yra ";
		echo 'draugas'; break;
		case 'Antanas': echo "Priesas";
			break;
	
	default:
		echo 'nezinoma';
	
}



?>