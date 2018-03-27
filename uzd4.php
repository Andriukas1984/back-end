<?php


$sk = [1, 2, 3, 4, 6, 3, 5, 8];

function mas($b){
    $c=[];
    foreach($b as $value){

        if ($value % 2 !==0 ){
        	$c[]=0;

        } else {
        	$c[]=$value;
        }
    }
    return $c;

}

var_dump( mas($sk));

echo json_encode(( mas($sk)));

