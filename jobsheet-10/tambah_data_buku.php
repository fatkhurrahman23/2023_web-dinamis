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
        $db = new Database();
    ?>
    <h3>Tambah data jenis buku</h3>
    <form action="simpan_data_buku.php" method="post">
        <table>
            <tr>
                <td>Kode buku</td>
                <td><input type="text" name="kode_buku"></td>
            </tr>
            <tr>
                <td>Judul buku</td>
                <td><input type="text" name="judul_buku"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>
                    <select name="kode_pengarang">
                        <option value="--"></option>
                            <?php
                                $no = 1;
                                foreach($db->ambil_data_pengarang() as $x) {
                                    echo "<option value='".$x['kode_pengarang']."'>".$x['nama_pengarang']."</option>";
                                }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis buku</td>
                <td>
                    <select name="kode_jenis_buku">
                        <option value="--"></option>
                        <?php
                            $no = 1;
                            foreach($db->ambil_data_jenis_buku() as $x) {
                                echo "<option value='".$x['kode_jenis_buku']."'>".$x['nama_jenis_buku']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <select name="kode_penerbit">
                        <option value="--"></option>
                        <?php
                            $no = 1;
                            foreach($db->ambil_data_penerbit() as $x) {
                                echo "<option value='".$x['kode_penerbit']."'>".$x['nama_penerbit']."</option>";
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
                    <select name="tahun" id="year">
                        <script>
                            var myDate = new Date();
                            var year = myDate.getFullYear();
                            for(var i = 2010; i < year+6; i++){
                                document.write('<option value="'+i+'">'+i+'</option>');
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
                <td><input type="text" name="jumlah_buku"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>