<?php

class automobilis{
    public $gamintojas;
    public $modelis;
    public $metai;

    function __construct($g, $m, $me)
    {
        $this->gamintojas = $g;
        $this->modelis = $m;
        $this->metai = $me;
    }
    function duomenys()
    {
        $s = ' %s - %s  - %s' . '<br>';
        echo(sprintf($s, $this->gamintojas, $this->modelis, $this->metai));

    }

}

$auto = new automobilis('Audi', 'A3', 2017 );
var_dump($auto->duomenys());
$auto = new automobilis('Bmw', 'M5', 2016 );
var_dump($auto->duomenys());
$auto = new automobilis( 'VW', 'Golf', 2014 );
var_dump($auto->duomenys());


class lengvasis extends automobilis {
         function duomenys(){
            $s = ' %s , %s , %s ( Lengvasis automobilis) ';
            $x = sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
            echo $x;
        }


}

class krovinins extends automobilis{


}


$leng = new lengvasis('Audi', 'A3', 2017 );
var_dump($leng->duomenys());
$leng = new lengvasis('Bmw', 'M5', 2016 );
var_dump($leng->duomenys());
$leng = new lengvasis( 'VW', 'Golf', 2014 );
var_dump($leng->duomenys());





