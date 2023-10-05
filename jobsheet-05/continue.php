<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 20; $i++) {
            if ($i >= 10 and $i <= 15) {
                continue;
            }
            echo $i."<br>";
        }
    ?>
</body>
</html>