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
    <h3>Tambah Data Penerbit</h3>
    <form action="simpan_data_penerbit.php" method="post">
        <table>
            <tr>
                <td>Kode Penerbit</td>
                <td><input type="text" name="kode_penerbit"></td>
            </tr>
            <tr>
                <td>Nama Penerbit</td>
                <td><input type="text" name="nama_penerbit"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>           
</body>
</html>
