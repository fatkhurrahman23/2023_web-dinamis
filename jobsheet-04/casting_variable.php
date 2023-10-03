<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casing Variable</title>
</head>
<body>
    <?php
        $var = 4.82;
        $holder = (double)$var;
        echo "$holder adalah ";
        echo gettype($holder);
        echo "<br>";
        $holder = (string)$var;
        echo "$holder adalah ";
        echo gettype($holder);
        echo "<br>";
        $holder = (int)$var;
        echo "$holder adalah ";
        echo gettype($holder);
        echo "<br>";
        $holder = (bool)$var;
        echo "$holder adalah ";
        echo gettype($holder);
        echo "<br>";
        echo "tipe asli variable adalah ";
        echo gettype($var);

    ?>
</body>
</html>