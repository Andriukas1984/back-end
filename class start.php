<?php

class person {
    public $name;
    public $age;
    private $salary = 1000;

    public function getsalary( $cur = 'EUR'){
        $x = $this->k($cur) * $this->salary;
        return $x. ' ' . $cur;
    }
    private function k($cur){
        if ($cur == 'EUR') return 1;
        else return 0.9;
}

}

$p = new person();
$p -> name = 'jonas';
$p -> age = 25;
echo $p->name . '<br>';
//echo $p->salary . '<br>';
echo $p->getSalary('USD') .'<br>';
//echo $p->k('USD') .'<br>';
var_dump($p);