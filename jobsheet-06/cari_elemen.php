<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari elemen</title>
</head>
<body>
    <?php
        $nilai = [80, 90, 80, 67, 90, 87, 75];
        $cari_nilai = in_array(100, $nilai);
        if ($cari_nilai) {
            echo "Nilai mahasiswa ada yang 100";
        } else {
            echo "Mahasiswa tidak ada yang mendapat nilai 100";
        }
    ?>
</body>
</html>