<?php

class c {
    private $mas =[];
    function add($name, $age, $salary){
        $this->mas[]= [
            'name' => $name,
            'age' => $age,
            'salary' => $salary
    ];
    }
    function info(){
        return $this->mas;
    }
}
$p = new c();
$p->add('jonas', 20, 500);
$p->add('petras', 23, 500);
$p->add('antanas', 24, 500);
$p->add('ansrius', 28, 500);
$p->add('lukas', 90, 500);

var_dump($p->info());