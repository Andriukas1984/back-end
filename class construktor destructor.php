<?php

class person{
    public $name;
    public $age;
    private $salary = 1000;
    function __construct($n, $a, $s){
       $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
}
$darb =[];
$darb[] = new person(  'jonas',  23, 500);
$darb[] = new person(  'petras',  25, 600);
$darb[] = new person(  'antanas',  27, 700);
var_dump($darb);

//$p = new person('jonas', 23, 500);
//var_dump($p);