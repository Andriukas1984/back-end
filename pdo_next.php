<?php

$cnn = new PDO('mysql:host=testukas.lt;dbname=mokymai', 'root');
$amzius = 26;
// taikinys nulauzimui istatant specialu teksta vietoje $kaina
$res = $cnn->query("select asm_vardas, asm_pavarde from asmuo where asm_amzius>{$amzius}");
while ($a = $res->fetch()){
   // echo $a['asm_vardas'] . ' ' . $a['asm_pavarde'] .'<br>';
}
// su apsauga nuo nulauzimo
$res = $cnn->prepare("select asm_vardas, asm_pavarde from asmuo where asm_amzius>:amzius");
$x = $res->execute([':amzius' => $amzius]);
while ($a = $res->fetch()){
    echo $a['asm_vardas'] . ' ' . $a['asm_pavarde'] .'<br>';
}