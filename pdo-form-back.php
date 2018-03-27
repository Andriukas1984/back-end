<?php
try {
    $cnn = new PDO('mysql:host=testukas.lt;dbname=mokymai', 'root');
    $res = $cnn->prepare("insert into asmuo (asm_vardas,asm_pavarde,asm_amzius) values(:vardas,:pavarde,:amzius)");
    $x = $res->execute([
        ':vardas' => $_POST['vardas'],
        ':pavarde' => $_POST['pavarde'],
        ':amzius' => $_POST['amzius']

    ]);
    $sql = "select * from asmuo";
    $res = $cnn->query($sql);
    echo '<table>';
    while ($row = $res->fetch()) {
        echo '<tr>';
        echo '<td>' . $row['asm_vardas'] . '</td>';
        echo '<td>' . $row['asm_pavarde'] . '</td>';
        echo '<td>' . $row['asm_amzius'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
catch (PDOException $err){
    echo $err->getMessage();
}
echo '<a href="pdo-form-front.html">Grizti i forma</a>';