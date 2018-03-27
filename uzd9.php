<?php


$mas = [2, 1, 5, 6, 8 ,8];
$sk = 2;

 function daug($a, $b){
     for($i=0; $i<count($a); $i++){
         $a[$i] *= $b;
     }
     return $a;
 }
 echo json_encode (daug ($mas, $sk));
