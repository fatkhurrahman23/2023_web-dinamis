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

    <h3>Tambah Data Buku</h3>
    <form action="simpan_data_buku.php" method="post">
        <table>
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kode_buku"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>
                    <select name="kode_pengarang">
                        <option value="--">-- Pilih Pengarang --</option>
                        <?php
                        $pdo_statement = $koneksi->prepare("SELECT * from data_pengarang");
                        $pdo_statement->execute();
                        $result_jk = $pdo_statement->fetchAll();
                        $no = 1;
                        foreach ($result_jk as $x) {
                            echo '<option value="'.$x['kode_pengarang'].'">'.$x['nama_pengarang'].'</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Buku</td>
                <td>
                    <select name="kode_jenis_buku">
                        <option value="--">-- Pilih Jenis Buku --</option>
                        <?php
                        $pdo_statement = $koneksi->prepare("SELECT * from data_jenis_buku");
                        $pdo_statement->execute();
                        $result_jk = $pdo_statement->fetchAll();
                       $no = 1;
                        foreach($result_jk as $x) {
                            echo '<option value="'.$x['kode_jenis_buku'].'">'.$x['nama_jenis_buku'].'</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <select name="kode_penerbit">
                        <option value="--">-- Pilih Penerbit --</option>
                        <?php
                        $pdo_statement = $koneksi->prepare("SELECT * from data_penerbit");
                        $pdo_statement->execute();
                        $result_jk = $pdo_statement->fetchAll();
                        $no = 1;
                        foreach($result_jk as $x) {
                            echo '<option value="'.$x['kode_penerbit'].'">'.$x['nama_penerbit'].'</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td><input type="text" name="isbn"></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>
                    <select  name="tahun" id="year">
                        <script>
                            var myDate = new Date();
                            var year = myDate.getFullYear();
                            for (var i = 2010; i < year + 6; i++) {
                                document.write('<option value="'+ i + '">'+ i +'</option>');
                            }
                        </script>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi"></textarea></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
