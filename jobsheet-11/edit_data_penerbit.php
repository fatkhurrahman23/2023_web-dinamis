<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penerbit</title>
</head>
<body>
    <?php
        include 'config.php';
        if (isset($_GET['id'])) {
            $kode_penerbit = $_GET['id'];
            $pdo_statement = $koneksi->prepare("SELECT * from data_penerbit WHERE kode_penerbit = ?");
            $pdo_statement->execute([$kode_penerbit]);
            $result = $pdo_statement->fetchAll();
            if (count($result) > 0) {
                $data_penerbit = $result[0];
            } else {
                header('Location: tampil_data_penerbit.php');
            }
        } else {
            header('Location: tampil_data_penerbit.php');
        }
    ?>
    <h3>Edit Data Penerbit</h3>
    <form action="simpan_edit_data_penerbit.php" method="post">
        <input type="hidden" name="kode_penerbit" value="<?php echo $data_penerbit['kode_penerbit']; ?>" />
        <table>
            <tr>
                <td>Kode Penerbit</td>
                <td><input type="text" name="kode_penerbit" value="<?php echo $data_penerbit['kode_penerbit']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Penerbit</td>
                <td><input type="text" name="nama_penerbit" value="<?php echo $data_penerbit['nama_penerbit']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
