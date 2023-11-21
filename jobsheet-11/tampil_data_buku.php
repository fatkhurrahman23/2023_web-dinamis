<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>

<body>
    <?php
    include 'config.php';
    ?>
    <h3>Data Buku</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Kode Pengarang</th>
            <th>Kode Jenis Buku</th>
            <th>Kode Penerbit</th>
            <th>ISBN</th>
            <th>Tahun</th>
            <th>Deskripsi</th>
            <th>Jumlah</th>
            <th>Edit</th>
        </tr>
        <?php
            $pdo_statement = $koneksi->prepare("SELECT * FROM data_buku");
            $pdo_statement->execute();
            $result = $pdo_statement->fetchAll();
            $no = 1;
            foreach ($result as $x) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $x['kode_buku']; ?></td>
                <td><?php echo $x['judul_buku']; ?></td>
                <td><?php echo $x['kode_pengarang']; ?></td>
                <td><?php echo $x['kode_jenis_buku']; ?></td>
                <td><?php echo $x['kode_penerbit']; ?></td>
                <td><?php echo $x['isbn']; ?></td>
                <td><?php echo $x['tahun']; ?></td>
                <td><?php echo $x['deskripsi']; ?></td>
                <td><?php echo $x['jumlah']; ?></td>
                <td><a href="edit_data_buku.php?id=<?php echo $x['kode_buku']; ?>">Edit</a></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
