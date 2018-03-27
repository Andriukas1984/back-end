
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>forma</title>
</head>
<body>

<?php

$naujas = implode(',', $_POST);


file_put_contents('failas/tekstas7.txt', $naujas . "\n", FILE_APPEND);


echo json_encode($naujas);


?>
<a href="uzd13.html">atgal</a>

</body>
</html>