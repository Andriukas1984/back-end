<?php
try {
    $cnn = new PDO('mysql:host=testukas.lt;dbname=mokymai', 'root');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions
    $res = $cnn->query("select asm_vardas from asmuo");
    while ($a = $res->fetch()) {
        echo $a['asm_vardas'] . '<br>';
    }
}
catch(PDOException $err) {
    echo $err->getMessage();
}


