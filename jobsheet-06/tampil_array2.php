<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Array</title>
</head>
<body>
    <?php
        $minuman_favorit = ["Boba", "Kopi susu", "Teh manis", "Es jeruk"];

        for ($i=0; $i < 4; $i++) { 
            echo $minuman_favorit[$i]; echo "<br>";
        }
    ?>
</body>
</html>