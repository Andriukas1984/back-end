<?php


$mas = [
    'a'=> 'labas rytas',
    'b'=> 'laba diena',
    'c'=> 'labas vakaras',
    'd'=> 'viso gero',
    'e'=> 'saldziu sapnu',
];


foreach ($mas as $key => $value){
    echo $key=strtoupper($value).'<br>';
}
foreach ($mas as $key => $value){
    echo $key=substr_replace($value, "", -1) .'<br>';
}





