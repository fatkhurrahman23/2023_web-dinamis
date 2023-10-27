<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class laptop {
            // membuat method untuk class laptop
            public function hidupkan_laptop($pemilik="Rahman", $merk="Apple") {
                return "Hidupkan laptop $merk punya $pemilik";
            }
        }
        // buat objek dari class laptop (instansiasi)
        $laptop_fathur = new laptop();
        echo $laptop_fathur->hidupkan_laptop();
        echo "<br />";
        echo $laptop_fathur->hidupkan_laptop("Fathur", "Lenovo");
    ?>
</body>
</html>