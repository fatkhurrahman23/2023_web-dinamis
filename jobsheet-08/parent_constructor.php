<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class komputer{
            public function __construct(){
                echo "Constructor dari class komputer <br>";
            }
            public function __destruct(){
                echo "Destructor dari class komputer <br>";
            }
        }
        // turunkan class komputer ke laptop
        class laptop extends komputer{
        }
        // turunkan class laptop ke chromebook
        class chromebook extends laptop{
        }
        // buat objek dari class chromebook (instansiasi)
        $gadget_baru = new chromebook();
        echo "Belajar OOP PHP <br>";
    ?>
</body>
</html>