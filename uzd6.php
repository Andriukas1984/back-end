<?php


$tekstas = ['jonas', 'petras', 'antanas', 'juozas'];

 function mas ($ilgis) {
     for ($i=0; $i<count($ilgis); $i++) {
         $ilgis[$i] = strlen($ilgis[$i]);
     }
     return $ilgis;
 }
echo json_encode(mas($tekstas));