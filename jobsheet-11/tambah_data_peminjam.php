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
    <h3>Tambah Data Peminjam</h3>
    <form action="simpan_data_peminjam.php" method="post">
        <table>
            <tr>
                <td>Kode Peminjam</td>
                <td><input type="text" name="kode_peminjam"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_peminjam"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value="--"></option>
                        <?php
                            $pdo_statement = $koneksi->prepare("SELECT * FROM jenis_kelamin");
                            $pdo_statement->execute();
                            $result = $pdo_statement->fetchAll();
                            $no = 1;
                            foreach ($result as $x) {
                                echo '<option value="'.$x['kode_jk'].'">'.$x['keterangan_jk'].'</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan">
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>