<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'config.php';
    ?>
    <h3>Tambah Data Jenis Buku</h3>
    <form action="simpan_data_jenis_buku.php" method="post">
        <table>
            <tr>
                <td>Kode Jenis Buku</td>
                <td><input type="text" name="kode_jenis_buku"></td>
            </tr>
            <tr>
                <td>Nama Jenis Buku</td>
                <td><input type="text" name="nama_jenis_buku"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
