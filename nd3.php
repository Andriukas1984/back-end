<?php

$s1 = [1, 3, 5, 8, 10];
$s2 = [1, 3, 6, 8];

 function mas($a, $b){

     $naujas = array_values(array_intersect($a, $b));
        for ($i=0; $i<count($naujas); $i++){

            while(true) {
                $ind = array_search($naujas[$i], $a);
                if ($ind === false) break;
                $a[$ind]=0;

            }

        }
     return $a;
 }
echo json_encode (mas ($s1, $s2));

