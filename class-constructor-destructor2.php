<?php


class a{
    const aaa = 'xxx';
    function  __construct(){
        echo __CLASS__ . ' ' . self::aaa .' construct<br>';
    }
    function  __destruct(){
        echo __CLASS__ . ' ' . a::aaa. ' destruct<br>';
    }
}
echo '--start--<br>';
$p = new a(); //egzempliorius sukuriamas suveikia konstrukt
echo '--po new--<br>';
unset($p); //egzempliorius sunaikinamas cia suveikia destrukt
echo '--po unset--<br>';