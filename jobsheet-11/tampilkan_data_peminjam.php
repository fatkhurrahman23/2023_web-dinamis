<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "config.php";
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Peminjam</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Edit</th>
        </tr>
        <?php
            $pdo_statement = $koneksi->prepare("SELECT a.*, b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin");
            $pdo_statement->execute();
            $result = $pdo_statement->fetchAll();
            $no = 1;
            foreach ($result as $x) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['kode_peminjam'] ?></td>
            <td><?php echo $x['nama_peminjam'] ?></td>
            <td><?php echo $x['keterangan_jk'] ?></td>
            <td>
                <?php
                    $tanggal_lahir = $x['tanggal_lahir'];
                    $tanggal_lahir_ganti_format = date("d-m-Y", strtotime($tanggal_lahir));
                    echo $tanggal_lahir_ganti_format;
                ?>
            </td>
            <td><?php echo $x['alamat'] ?></td>
            <td><?php echo $x['pekerjaan'] ?></td>
            <td><a href="edit_data_peminjam.php?id=<?php echo $x['kode_peminjam'] ?>">Edit</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>