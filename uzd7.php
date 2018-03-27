<?php


$senas = ['jonas', 'petras', 'antanas'];

 function mas ($pakeist){

     for ($i = 0; $i < count($pakeist); $i++) {
         $pakeist[$i] = ['Vardas' => $pakeist[$i], 'ilgis' => strlen($pakeist[$i])];
     }
     return $pakeist;
 }
 var_dump(mas($senas));

echo json_encode(mas($senas)) . "<br>";