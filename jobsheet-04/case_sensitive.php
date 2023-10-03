<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case sensitive</title>
</head>
<body>
    <?php
        $hobi = "rebahan";
        echo "Hobi saya adalah " . $hobi . "<br>";
        echo "Hobi saya adalah " . $HOBI . "<br>";
        echo "Hobi saya adalah " . $Hobi . "<br>";
    ?>
</body>
</html>