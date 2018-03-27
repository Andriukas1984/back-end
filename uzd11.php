<?php

$mas = [3,1,2,4,5,6,3];

$naujas = implode(',', $mas);


file_put_contents('failas/tekstas5.txt', $naujas);

$s = file_get_contents('failas/tekstas5.txt');
echo $s . '<br>';