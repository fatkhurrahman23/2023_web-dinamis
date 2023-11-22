<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jenis Buku</title>
</head>

<body>
    <?php
    include 'config.php';
    ?>
    <h3>Data Jenis Buku</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Jenis Buku</th>
            <th>Nama Jenis Buku</th>
            <th>Edit</th>
        </tr>
        <?php
            $pdo_statement = $koneksi->prepare("SELECT * FROM data_jenis_buku");
            $pdo_statement->execute();
            $result = $pdo_statement->fetchAll();
            $no = 1;
            foreach ($result as $x) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $x['kode_jenis_buku']; ?></td>
                <td><?php echo $x['nama_jenis_buku']; ?></td>
                <td><a href="edit_data_jenis_buku.php?id=<?php echo $x['kode_jenis_buku']; ?>">Edit</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
