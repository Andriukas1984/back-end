<?php


$s1 = [1, 3, 5, 8, 10];
$s2 = [1, 3, 6, 8];

 function mas($a, $b){

     $naujas = array_values(array_intersect($a, $b));
     array_map(function($e) use (&$a){
         while(true) {
             $ind = array_search($e, $a);
             if ($ind === false) break;
             $a[$ind]=0;

         }
         return $e;
     }, $naujas);

     return $a;

     }


echo json_encode (mas ($s1, $s2));

