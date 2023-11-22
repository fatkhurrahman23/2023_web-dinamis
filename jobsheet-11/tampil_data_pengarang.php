<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include('config.php');
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Pengarang</th>
            <th>Nama Pengarang</th>
            <th>Edit</th>
        </tr>
        <?php
            $pdo_statement = $koneksi->prepare("SELECT * FROM data_pengarang");
            $pdo_statement->execute();
            $result = $pdo_statement->fetchAll();
            $no = 1;
            foreach($result as $x){
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $x['kode_pengarang']; ?></td>
                <td><?php echo $x['nama_pengarang']; ?></td>
                <td><a href="edit_data_pengarang.php?id=<?php echo $x['kode_pengarang'];?>">Edit</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
