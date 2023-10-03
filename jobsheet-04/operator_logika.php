<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Logika</title>
</head>
<body>
    <?php
        // PENGGUNAAN OPERATOR AND
        $username = "admin";
        $password = "admin123";

        if ($username == "admin" && $password == "admin123") {
            echo "Berhasil login"; echo "<br>";
        } else {
            echo "Tidak berhasil login"; echo "<br>";
        }

        // PENGGUNAAN OPERATOR OR
        $total_belanja = 200000;
        $kupon = 'superdiskon';

        if ($total_belanja == 100000 || $kupon == 'superdiskon') {
            echo "Anda mendapatkan diskon 30%"; echo "<br>";
        } else {
            echo "Anda tidak mendapat diskon"; echo "<br>";
        }

        // PENGGUNAAN OPERATOR XOR
        $peserta_pertama = true;
        $peserta_kedua = true;

        if ($peserta_pertama XOR $peserta_kedua) {
            echo "Pemenang hanya satu orang saja"; echo "<br>";
        } else {
            echo "Pemenang tidak boleh lebih dari satu"; echo "<br>";
        }

        // PENGGUNAAN OPERATOR NOT
        $nilai = 80;
        if ($nilai != 100) {
            echo "Nilai bagus"; echo "<br>";
        } else {
            echo "Nilai sempurna"; echo "<br>";
        }
    ?>
</body>
</html>