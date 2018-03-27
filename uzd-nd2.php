<?php


class turgus {
    public function automobilis($gamintojas, $modelis, $metai, $kaina){




    }
}
class automobiliai {

    function __construct($g, $m, $me, $k){
        $this->gamintojas = $g;
        $this->modelis = $m;
        $this->metai = $me;
        $this->kaina = $k;
    }

}
$auto =[];
$auto[] = new automobiliai('Audi', 'A3', 2017, 30000 );
$auto[] = new automobiliai('Bmw', 'M5', 2016, 20000 );
$auto[] = new automobiliai( 'VW', 'Golf', 2014, 15000 );

var_dump($auto);