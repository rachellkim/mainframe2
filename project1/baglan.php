<?php

require 'db_config.php';

try {

$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
$db = new PDO($dsn, DB_USER, DB_PASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
die("Veritabanı bağlantı hatası :" .$e->getMessage());
}

?>

