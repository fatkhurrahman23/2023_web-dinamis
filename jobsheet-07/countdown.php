<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set("Asia/Jakarta"); // Mengatur zona waktu
        $batas_pembayaran = strtotime("20 October 2023 12:16:54 +1 days");
        $waktu_saat_ini = strtotime("now");
        $selisih = $batas_pembayaran - $waktu_saat_ini;

        $hari = floor($selisih / 86400);

        $sisa = $selisih % 86400;
        $jam = floor($sisa / 3600);

        $sisa = $sisa % 3600;
        $menit = floor($sisa / 60);

        $sisa = $sisa % 60;
        $detik = floor($sisa / 1);

        echo "Sisa waktu pembayaran: ".$hari." hari ".$jam." jam ".$menit." menit ".$detik." detik lagi";
    ?>
</body>
</html>