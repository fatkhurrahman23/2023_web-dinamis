<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array multidimensi</title>
</head>
<body>
    <?php
        $mahasiswa = array(
            'id' => array(1, 2, 3, 4),
            'nama' => array('Dina', 'Mona', 'Miki', 'Joko'),
            'prodi' => array('Informatika', 'elektro', 'Telekomunikasi', 'Listrik'),
            'alamat' => array('Semarang', 'Manado', 'Medan', 'Surabaya'),
        );

        for ($i=0; $i < 4; $i++) { 
            echo $mahasiswa['id'][$i]." ".$mahasiswa['nama'][$i]." ".$mahasiswa['prodi'][$i]." ".$mahasiswa['alamat'][$i]."<br>";
        }
        
    ?>
</body>
</html>