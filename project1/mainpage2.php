<?php
//hata ayıklama !
error_reporting(E_ALL);
ini_set('display_errors', 1);
           
            $servername = "";  
            $username = "";         
            $password = "";             
            $dbname = "";

            
            $conn = new mysqli($servername, $username, $password, $dbname);

            
            if ($conn->connect_error) {
                die("Bağlantı hatası: " . $conn->connect_error);
            }

           
            $sql = "";
            $result = $conn->query($sql);

           
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['ciro'] . "</td>";
                    echo "<td>" . $row['odemeler'] . "</td>";
                    echo "<td>" . $row['net_ciro'] . "</td>";
                    echo "<td>" . $row['kredi_karti'] . "</td>";
                    echo "<td>" . $row['cari'] . "</td>";
                    echo "<td>" . $row['indirim'] . "</td>";
                    echo "<td>" . $row['ikram'] . "</td>";
                    echo "<td>" . $row['iptal'] . "</td>";
                    echo "<td>" . $row['kuver'] . "</td>";
                    echo "<td>" . $row['kisi_basi_ortalama'] . "</td>";
                    echo "<td>" . $row['adisyon_sayisi'] . "</td>";
                    echo "<td>" . $row['adisyon_basi_ortalama'] . "</td>";
                    echo "<td>" . $row['servis_geliri'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='13'>Veri Bulunamadı</td></tr>";
            }

           
            $conn->close();
            ?>