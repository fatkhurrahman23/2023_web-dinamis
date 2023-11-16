<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "config.php";
        if(isset($_GET['id'])){
            $kode_peminjam = $_GET['id'];
            $pdo_statement = $koneksi->prepare("SELECT a.*, b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin WHERE a.kode_peminjam = '$kode_peminjam'");
            $pdo_statement->execute();
            $data_peminjam = $pdo_statement->fetchAll();
        }
        else {
            header("Location: tampilkan_data_peminjam.php");
        }
    ?>
    <h3>Edit Data Peminjam</h3>
    <form action="simpan_edit_data_peminjam.php" method="post">
        <input type="hidden" name="kode_peminjam" value="<?php echo $data_peminjam[0]['kode_peminjam']; ?>"/>
        <table>
            <tr>
                <td>Kode Peminjam</td>
                <td><input type="text" name="kode_peminjam" value="<?php echo $data_peminjam[0]['kode_peminjam']; ?>" disabled></td>
            </tr>
            <tr>
                <td>Nama Peminjam</td>
                <td><input type="text" name="nama_peminjam" value="<?php echo $data_peminjam[0]['nama_peminjam']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>
                    <select name="jenis_kelamin">
                        <?php
                            $pdo_statement = $koneksi->prepare("SELECT * FROM jenis_kelamin");
                            $pdo_statement->execute();
                            $result = $pdo_statement->fetchAll();
                            foreach ($result as $x) {
                                $kode_jk = $data_peminjam[0]['jenis_kelamin'];
                                echo "<option value='".$x['kode_jk']."";
                                if($x['kode_jk'] == $kode_jk) {
                                    echo "selected";
                                }
                                echo "'>".$x['keterangan_jk']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value="<?php echo $data_peminjam[0]['tanggal_lahir']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"><?php echo $data_peminjam[0]['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $data_peminjam[0]['pekerjaan']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
        </table>
    </form>
</body>
</html>