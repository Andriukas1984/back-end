<?php 
//Sukurti klasę turgus. Sukurti funkciją atomobilis, su kuria būtų galima pateikti automobilį į turgų. 
//Funkcijos parametrai: gamintojas, modelis, metai, kaina. Automobilių informacijų talpinti į klasės savybę automobiliai (masyvas). 
//Sukurti funkciją minKaina, kuri surastų automobilį su mažiausia kaina.

class turgus{
	private $turgus=[];

	function automobilis($gamin, $mod, $met, $kain){
		$this ->turgus[] = [
			'gamintojas' => $gamin,
			'modelis' => $mod,
			'metai' => $met,
			'kaina' => $kain

		];
			}
			function info(){
	            return $this->turgus;
            }
		function minKaina(){
	        $kaina = $this->turgus[0]['kaina'];
			foreach($this->turgus as $auto)
                if ($auto['kaina'] < $kaina){
			        $kaina = $auto['kaina'];
                }
		return $kaina;
		}

	}

$t = new turgus();

$t -> automobilis('BMW', 'E39',2002, 4000);
$t -> automobilis('BMW', 'E46',2005, 3000);
$t -> automobilis('Audi', 'A6',2006, 5000);
$t -> automobilis('Audi', 'A4',2000, 1500);
$t -> automobilis('Subaru', 'Legacy',2002, 2500);
$t -> automobilis('Subaru', 'Forester',2004, 33000);
$t -> automobilis('Mazda', '6',2008, 1200);

var_dump($t);
echo 'Minimali Kaina: ' . $t->minKaina();


		// function minKaina(){
		// 	$kaina = array_column($this->turgus, 'kaina');
		// 	$min_kaina = min($this->turgus);
			
		// 	$min_kaina_a = array();

		// 	foreach ($this->turgus as $key => $value) {
		// 		if ($value['kaina'] == $min_kaina){
		// 			$min_kaina_a[] = $value;

		// 		}
		// 	}
			
		// 	return $min_kaina_a;
		// }