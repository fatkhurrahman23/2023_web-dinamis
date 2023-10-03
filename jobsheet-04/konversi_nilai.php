<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi nilai</title>
</head>
<body>
    <?php
        $suhu = "29.5 derajat celcius";
        echo "Tipe String: $suhu"; echo "<br>";

        settype($suhu, "double");
        echo "Tipe Double: $suhu"; echo "<br>";

        settype($suhu, "integer");
        echo "Tipe Integer: $suhu"; echo "<br>";

        settype($suhu, "string");
        echo "Tipe String: $suhu"; echo "<br>";
    ?>
</body>
</html>