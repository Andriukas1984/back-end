<?php

session_start();

function f(){
$a = rand(1, 100);
    if (isset($_SESSION['aaa']))  $_SESSION['aaa'][] = $a;
    else {
    $_SESSION['aaa'] = [$a];

};
    return $_SESSION['aaa'];
    }
    echo json_encode(f());