<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator perbandingan</title>
</head>
<body>
    <?php
        $x = 40;
        $y = "40";
        var_dump($x == $y); echo "<br>"; //mengembalikan nilai true karena nilainya sama
        var_dump($x === $y); echo "<br>"; //mengembalikan nilai false karena tipe data tidak sama
        var_dump($x != $y); echo "<br>"; //mengembalikan nilai false karena nilainya sama
        var_dump($x <> $y); echo "<br>"; //mengembalikan nilai false karena nilainya sama
        var_dump($x !== $y); echo "<br>"; //mengembalikan nilai true karena tipe data tidak sama
        var_dump($x > $y); echo "<br>"; //mengembalikan nilai false karena $x tidak lebih besar dari $y
        var_dump($x < $y); echo "<br>"; //mengembalikan nilai false karena $x tidak lebih kecil dari $y
        var_dump($x >= $y); echo "<br>"; //mengembalikan nilai true karena $x lebih besar atau sama dengan $y
        var_dump($x <= $y); echo "<br>"; //mengembalikan nilai true karena $x lebih kecil atau sama dengan $y
        var_dump($x <=> $y); echo "<br>"; //mengembalikan nilai 0 karena $x sama dengan $y
    ?>
</body>
</html>