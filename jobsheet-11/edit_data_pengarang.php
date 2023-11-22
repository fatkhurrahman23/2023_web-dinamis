<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengarang</title>
</head>
<body>
    <?php
        include 'config.php';
        if (isset($_GET['id'])) {
            $kode_pengarang = $_GET['id'];
            $pdo_statement = $koneksi->prepare("SELECT * FROM data_pengarang WHERE kode_pengarang = ?");
            $pdo_statement->execute([$kode_pengarang]);
            $result = $pdo_statement->fetchAll();
            if (count($result) > 0) {
                $data_pengarang = $result[0];
            } else {
                header('Location: tampil_data_pengarang.php');
            }
        } else {
            header('Location: tampil_data_pengarang.php');
        }
    ?>

    <h3>Edit Data Pengarang</h3>
    <form action="simpan_edit_data_pengarang.php" method="post">
        <input type="hidden" name="kode_pengarang" value="<?php echo $data_pengarang['kode_pengarang']; ?>" />
        <table>
            <tr>
                <td>Kode Pengarang</td>
                <td><input type="text" name="kode_pengarang" value="<?php echo $data_pengarang['kode_pengarang']; ?>" disabled></td>
            </tr>
            <tr>
                <td>Nama Pengarang</td>
                <td><input type="text" name="nama_pengarang" value="<?php echo $data_pengarang['nama_pengarang']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
