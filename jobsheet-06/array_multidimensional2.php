<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mahasiswa = array(
            'id' => array(1, 2, 3, 4),
            'nama' => array('Dina', 'Mona', 'Miki', 'Joko'),
            'prodi' => array('Informatika', 'elektro', 'Telekomunikasi', 'Listrik'),
            'alamat' => array('Semarang', 'Manado', 'Medan', 'Surabaya'),
        );
    ?>

    <table border="1">
        <tr>
            <th>ID</th><th>Nama</th><th>Prodi</th><th>Alamat</>
        </tr>
        <?php
            for ($i=0; $i < 4; $i++) {
        ?>
                <tr>
                    <td><?php echo $mahasiswa['id'][$i]; ?></td>
                    <td><?php echo $mahasiswa['nama'][$i]; ?></td>
                    <td><?php echo $mahasiswa['prodi'][$i]; ?></td>
                    <td><?php echo $mahasiswa['alamat'][$i]; ?></td>
                </tr>
        <?php    
            }
        ?>

    </table>
</body>
</html>