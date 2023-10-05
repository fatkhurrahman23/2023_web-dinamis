<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case</title>
</head>
<body>
    <?php
        $buah = "apel";
        switch ($buah) {
            case "mangga":
                echo "Buah favorit Anda adalah mangga";
                break;
            case "jeruk":
                echo "Buah favorit Anda adalah jeruk";
                break;
            case "anggur":
                echo "Buah favorit Anda adalah anggur";
                break;
            default:
                echo "Buah favorit Anda tidak tersedia";
        }
    ?>
</body>
</html>