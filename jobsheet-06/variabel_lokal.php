<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>var lokal</title>
</head>
<body>
    <?php
        function hobi(){
            $hobi_saya = "bermain game";
            print($hobi_saya);
            echo "<br>";
        }

        $hobi_saya = "memancing kerusuhan";
        
        hobi();

        print($hobi_saya);
    ?>
</body>
</html>