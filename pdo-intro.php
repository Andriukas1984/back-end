<?php

$cnn = new PDO('mysql:host=testukas.lt;dbname=mokymai', 'root'); //rysys su db atidaromas
$sql = "select count(*) as cnt from asmuo";  // sql uzklausos tekstas
$res = $cnn->query($sql);   // ivykdoma uzklausa ant serverio
while ($row=$res->fetch()){  // parsiuncia is serverio eiline rezultatu eilute masyva
    echo $row['cnt'].'<br>'; // isvedimas
    //var_export($row);
}
$res->closeCursor(); // rezultatu ant serverio sunaikinimas
$sql = "select * from asmuo";
$res = $cnn->query($sql);
echo '<table border=1>';
while ($row=$res->fetch()){
    echo '<tr>';
    echo '<td>' . $row['asm_id'].'</td>';
    echo '<td>' . $row['asm_vardas'].'</td>';
    echo '<td>' . $row['asm_pavarde'].'</td>';
    echo '<td>' . $row['asm_amzius'].'</td>';
    echo '</tr>';
}
echo '</table>';
$res->closeCursor();