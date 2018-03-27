<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>forma</title>
</head>
<body>

<?php

echo json_encode($_POST);

file_put_contents('failas/tekstas6.txt', $_POST);



?>
<a href="forma-post-f.html">atgal</a>

</body>
</html>