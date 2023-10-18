<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah dan kurang elemen array</title>
</head>
<body>
    <?php
        $minuman_favorit = ["Boba", "Kopi susu", "Teh manis", "Es jeruk"];

        // menghapus elemen terakhir array
        $elemen_terakhir = array_pop($minuman_favorit);
        echo "<b>Elemen yang dihapus: </b>".$elemen_terakhir."<br>";

        // menambah elemen array
        $tambah_elemen = array_push($minuman_favorit, "Strawberry Float", "Mathca");
        echo "<b>Array setelah ditambah elemen: </b><br>";
        for ($x=0; $x < $tambah_elemen; $x++) { 
            echo $minuman_favorit[$x];
            echo "<br>";
        }

        // menghapus elemen pertama array
        $elemen_pertama = array_shift($minuman_favorit);
        echo "<b>Elemen yang dihapus: </b>".$elemen_pertama."<br>";
    ?>
</body>
</html>