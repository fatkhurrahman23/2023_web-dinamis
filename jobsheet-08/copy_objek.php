<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $object1 = new User();
        $object1->name = "Fathur";
        $object2 = clone $object1;
        $object2->name = "Rahman";
        
        echo "object1 name = " . $object1->name . "<br>";
        echo "object2 name = " . $object2->name;

        class User {
            public $name;
        }
    ?>
</body>
</html>