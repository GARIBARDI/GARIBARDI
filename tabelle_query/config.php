<?php

$PHP_SELF = $_SERVER['PHP_SELF'];

if (preg_match("(config.php)",$PHP_SELF)) { 
    Header("Location: index.php");
    die();
}



$dbhost = "localhost";
$dbuname = "garibardi";
$dbpass = "";
$dbname = "my_garibardi";
