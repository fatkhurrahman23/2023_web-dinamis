<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi nilai 2</title>
</head>
<body>
    <?php
        $suhu = "29.5 derajat celcius";
        echo "Tipe String: $suhu"; echo "<br>";

        echo "Tipe Double: " . doubleval($suhu); echo "<br>";

        echo "Tipe Integer: " . intval($suhu); echo "<br>";

        echo "Tipe String: " . $suhu; echo "<br>";
    ?>
</body>
</html>