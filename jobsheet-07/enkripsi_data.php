<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $password = "admin123";
        $enkrip_password = crc32($password);
        echo $enkrip_password."<br>";

        $kode = 12345;
        $enkrip_password_lagi = crypt($password, $kode);
        echo $enkrip_password_lagi."<br>";
        
        $enkrip_password_juga = md5($password);
        echo $enkrip_password_juga."<br>";
    ?>
</body>
</html>