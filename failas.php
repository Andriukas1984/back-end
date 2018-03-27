<?php

$f = fopen('failas/tekstas.txt', 'r');

$s = fread($f, filesize('failas/tekstas.txt'));

fclose($f);

echo $s . '<br>';
//rasymas
$ss = 'Labas vakaras';



$f =fopen('failas/tekstas2.txt', 'w');
fwrite($f, $ss);
fclose($f);

//rasymas su papildymu

$f =fopen('failas/tekstas2.txt', 'a');
fwrite($f, $ss);
fwrite($f, $ss);
fwrite($f, $ss);
fwrite($f, $ss);
fwrite($f, $ss);
fclose($f);

echo $s ."<br>";

//supaprastintas skaitymas

$s = file_get_contents('failas/tekstas2.txt');
echo $s . '<br>';

file_put_contents('failas/tekstas3.txt', 'Irasyti duomenis');


//failu funkcijos


copy('failas/tekstas3.txt', 'failas/tekstas4.txt');

unlink('failas/tekstas3.txt');

if (!file_exists('failas/aaa'))
mkdir('failas/aaa');

rmdir('failas/aaa');

$x = @rmdir('failas/xxx');
if ($x === false) echo 'Blogai' . '<br>';

$er = (error_get_last());
echo $er['message'] . '<br>';

$ar = scandir('failas');
foreach ($ar as $file) {
    if ($file != '.' && $file != '..') echo $file .'<br>';
}


