<?php

header("Access-Control-Allow-Origin: *");  // Tüm domainlere izin verir
header("Access-Control-Allow-Methods: GET, POST");  // İzin verilen HTTP metotları
header("Access-Control-Allow-Headers: Content-Type");  // İzin verilen header'lar



if (isset($_GET['gun']) && isset($_GET['ay']) && isset($_GET['yil'])) {
    $gun = $_GET['gun'];
    $ay = $_GET['ay'];
    $yil = $_GET['yil'];

    echo "Gün: $gun, Ay: $ay, Yıl: $yil";
} else {
    echo "Eksik parametreler!";
}
?>
