<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function tambahDua($angka){
            $angka += 2;
        }
        function tambahLima(&$angka){
            $angka += 5;
        }
        $angka_awal = 10;
        tambahDua($angka_awal);
        echo "Angka awal adalah $angka_awal <br/>";
        tambahLima($angka_awal);
        echo "Angka awal adalah $angka_awal <br/>";
    ?>
</body>
</html>