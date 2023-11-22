<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengarang</title>
</head>
<body>
    <?php
    include 'config.php';
    ?>
    <h3>Tambah Data Pengarang</h3>
    <form action="simpan_data_pengarang.php" method="post">
        <table>
            <tr>
                <td>Kode Pengarang</td>
                <td><input type="text" name="kode_pengarang"></td>
            </tr>
            <tr>
                <td>Nama Pengarang</td>
                <td><input type="text" name="nama_pengarang"></td>
            </tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
