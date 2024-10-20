<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div Group</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>

<div class="container">

    <div class="button-container">
        <form id="tarihSecimi">
            <button type="button" id="gun" onclick="günlük()">Günlük</button>
            <button type="button" id="ay" onclick="aylık()">Aylık</button>
            <button type="button" id="yil" onclick="yıllık()">Yıllık</button>
            <br>
        </form>
    </div>

    <div class="date-input-container">
        <input type="date" id="tarihInput" style="display: none;" onchange="veriGetir()">
        <button type="button" onclick="veriGetir()">Veri Getir</button>
    </div>

    <div class="nav-buttons">
        <form class="c2">
            <button type="button" onclick="oncekiGun()"> Önceki Gün </button>
            <button type="button" onclick="location.reload()">Yenile</button>
            <button type="button" onclick="sonrakiGun()"> Sonraki Gün </button>
        </form>
    </div>

</div>

<div class="ciro_tablosu">
    <h2>GENEL CİRO</h2>
    <div class="date"></div>
    <table>
        <tr>
            <td>Ciro</td>
            <td>
                <?php
                // Veritabanı bağlantısını dahil et
                include 'baglanti.php';

                // SQL sorgusu
                $sql = "SELECT ciro, odemeler, net_ciro, kredi_karti, cari, indirim, ikram, iptal, kuver, kisi_basi_ortalama, adisyon_sayisi, adisyon_basi_ortalama, servis_geliri FROM tablo_adi WHERE tarih = CURDATE()";
                $result = $conn->query($sql);

                // Veriyi çekip tabloya yazdır
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row['ciro'];
                } else {
                    echo "Veri yok";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Ödemeler</td>
            <td><?php echo $row['odemeler']; ?></td>
        </tr>
        <tr>
            <td>Net Ciro</td>
            <td><?php echo $row['net_ciro']; ?></td>
        </tr>
        <tr>
            <td>Kredi Kartı</td>
            <td><?php echo $row['kredi_karti']; ?></td>
        </tr>
        <tr>
            <td>Cari</td>
            <td><?php echo $row['cari']; ?></td>
        </tr>
        <tr>
            <td>İndirim</td>
            <td><?php echo $row['indirim']; ?></td>
        </tr>
        <tr>
            <td>İkram</td>
            <td><?php echo $row['ikram']; ?></td>
        </tr>
        <tr>
            <td>İptal</td>
            <td><?php echo $row['iptal']; ?></td>
        </tr>
        <tr>
            <td>Kuver</td>
            <td><?php echo $row['kuver']; ?></td>
        </tr>
        <tr>
            <td>Kişi Başı Ortalama</td>
            <td><?php echo $row['kisi_basi_ortalama']; ?></td>
        </tr>
        <tr>
            <td>Adisyon Sayısı</td>
            <td><?php echo $row['adisyon_sayisi']; ?></td>
        </tr>
        <tr>
            <td>Adisyon Başı Ortalama</td>
            <td><?php echo $row['adisyon_basi_ortalama']; ?></td>
        </tr>
        <tr>
            <td>Servis Geliri</td>
            <td><?php echo $row['servis_geliri']; ?></td>
        </tr>
    </table>
</div>

</body>
</html>
