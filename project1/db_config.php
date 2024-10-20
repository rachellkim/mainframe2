<?php

define("DB_HOST","localhost");
define("DB_NAME","Coskntrn");
define("DB_USER","root");
define("DB_PASS","");
define("DB_CHARSET","utf8");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) { 
    die("Bağlantı başarısız". $conn->connect_error);
}



?>


