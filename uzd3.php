<?php


$a = ['jonas', 'peTras', 'antaNas'];

 function mas($b){
     $c=[];
     foreach($b as $value){

        $x = strtolower($value);
        $c[] = ucfirst($x);
     }
     return $c;

 }

var_dump( mas($a)) . '<br>';