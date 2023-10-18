<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter fungsi</title>
</head>
<body>
    <?php
        // membuat fungsi
        function perkenalan($nama, $salam){
            echo $salam.", ";
            echo "Perkenalan, nama saya ".$nama."<br/>";
            echo "Senang berkenalan dengan anda <br/>";
        }

        // memanggil fungsi yang sudah dibuat
        perkenalan("Fathur", "Hi");

        echo "<hr>";

        $saya = "Rafathar";
        $ucapanSalam = "Selamat Pagi";
        // memanggilnya lagi
        perkenalan($saya, $ucapanSalam);
    ?>
</body>
</html>