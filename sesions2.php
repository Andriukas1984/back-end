<?php


session_start();
if (isset($_SESSION['skaitliukas'])) echo $_SESSION['skaitliukas'];
else  echo 'skaitliukas nepradetas';
