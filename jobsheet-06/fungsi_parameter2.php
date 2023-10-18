<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Fungsi dengan parameter untuk penjumlahan"; echo "<br>";
        function fungsiTambah($angka1, $angka2){
            $jumlah = $angka1 + $angka2;
            echo "Jumlah dari dua angka: $jumlah";
        }

        fungsiTambah(12, 20);
        echo "<br>"; echo "<br>";
        echo "Fungsi dengan parameter untuk string"; echo "<br>";
        function biodata($nama, $tahun){
            echo "$nama, lahir pada $tahun <br>";
        }

        biodata("Fathur", "2004");
        biodata("Rafathar", "2017");
        biodata("Rahman", "2004");
    ?>
</body>
</html>