<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="simpan_data.php" method="POST">
        Nama: <input type="text" name="nama"><br>
        Email: <input type="text" name="email"><br>
        Jenis Kelamin:  <input type="radio" name="jenis_kelamin" value="L">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan<br>
        Minat: <br>
        <input type="checkbox" name="minat1" value="PHP">PHP<br>
        <input type="checkbox" name="minat2" value="MySQL">MySQL<br>
        <input type="checkbox" name="minat3" value="Linux">Linux<br>
        <input type="checkbox" name="minat4" value="Hacking">Hacking<br>
        <input type="submit" value="Kirim">
</body>
</html>