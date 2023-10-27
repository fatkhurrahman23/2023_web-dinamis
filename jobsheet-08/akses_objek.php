<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $object = new User;
        print_r($object); echo "<br>";

        $object -> name = "Fathur";
        $object -> password = "pass12345";
        print_r($object); echo "<br>";

        $object -> save_user();

        class User {
            public $name, $password;
            function save_user() {
                echo "Halo ini adalah fungsi di dalam kelas User";
            }
        }

    ?>
</body>
</html>