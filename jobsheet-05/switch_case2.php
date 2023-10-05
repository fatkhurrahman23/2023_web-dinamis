<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case 2</title>
</head>
<body>
    <?php
        $kendaraan = "sepeda";
        switch ($kendaraan) {
            case "mobil":
                echo "Saya memakai kendaraan mobil ketika berangkat";
                break;
            case "grab":
            case "gojek":
                echo "Saya memakai kendaraan ojek online ketika berangkat";
                break;
            case "Bus":
                echo "Saya memakai kendaraan bus ketika berangkat";
                break;
            case "sepeda":
                echo "Saya memakai kendaraan sepeda ketika berangkat";
                break;
            default:
                echo "Saya hari ini tidak berangkat";
        }
    ?>
</body>
</html>