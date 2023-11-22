<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penerbit</title>
</head>
<body>
    <?php
        include 'config.php';
    ?>
    <h3>Data Penerbit</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Penerbit</th>
            <th>Nama Penerbit</th>
            <th>Edit</th>
        </tr>
            <?php
            $pdo_statement = $koneksi->prepare("SELECT * FROM data_penerbit");
            $pdo_statement->execute();
            $result = $pdo_statement->fetchAll();
            $no = 1;
            foreach ($result as $x) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $x['kode_penerbit']; ?></td>
                <td><?php echo $x['nama_penerbit']; ?></td>
                <td><a href="edit_data_penerbit.php?id=<?php echo $x['kode_penerbit']; ?>">Edit</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
