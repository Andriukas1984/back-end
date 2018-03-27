<?php


$s1 = [1, 3, 5, 8, 10];
$s2 = [3, 6, 8];

 function mas($a, $b){

     $naujas = array_values(array_intersect($a, $b));
        for ($i=0; $i<count($naujas); $i++){
            $naujas[$i] =  $naujas[$i]**2;
        }
     return $naujas;
 }
echo json_encode (mas ($s1, $s2));