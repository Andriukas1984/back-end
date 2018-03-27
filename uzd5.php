<?php

$sk = [2, 5, 7, 9, 7, 3, 9];


function mas($naujas){


    for ($i = 0; $i <count($naujas)/2; $i++) {
        $naujas[$i] = $naujas[$i]** 2;
    }
    return $naujas;
}
echo json_encode(mas($sk));




