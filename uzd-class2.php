<?php

class automobiliai{
    public $gamintojas;
    public $modelis;
    public $metai;
    function __construct($g, $m, $me){
        $this->gamintojas = $g;
        $this->modelis = $m;
        $this->metai = $me;

        $s = "%s gamintojas %s modelis %s metai";
        $x = sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }
}
$auto =[];
$auto[] = new automobiliai('Audi', 'A3', 2017 );
$auto[] = new automobiliai('Bmw', 'M5', 2016 );
$auto[] = new automobiliai( 'VW', 'Golf', 2014 );
var_dump($auto);

class lengvasis extends automobiliai {



}

class krovinins extends automobiliai{


}
