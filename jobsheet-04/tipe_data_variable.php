<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data Variable</title>
</head>
<body>
    <?php
        $testing = 5;
        echo gettype($testing);
        echo "<br>";
        $testing = "Belajar PHP";
        echo gettype($testing);
        echo "<br>";
        $testing = 5.0;
        echo gettype($testing);
        echo "<br>";
        $testing = false;
        echo gettype($testing);
    ?>
</body>
</html>