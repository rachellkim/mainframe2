<?php

$gun =$_GET['gun'];
$ay =$_GET['ay'];
$yil = $_GET['yil'];

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die('Bağlanma Hatası'. $conn->connect_error);
}


$sql = "SELECT * FROM adisyonlar WHERE DAY(tarih) = ? 
AND MONTH(tarih) =? AND YEAR(tarih)=?";

$stmt =$conn ->prepare($sql);
$stmt->bind_param("iii", $gun, $ay,);
$stmt->execute();
$result = $stmt->get_result();


$data = $result->fetch_all(MYSQLI_ASSOC);
foreach ($data as $row)
{
    echo "". $row[''] .",toplam". $row[""]
    ."<br>";

}

?>