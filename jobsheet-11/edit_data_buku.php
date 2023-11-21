<?php
include 'config.php';

if (isset($_GET['id'])) {
    $kode_buku = $_GET['id'];
    $pdo_statement = $koneksi->prepare("SELECT * FROM data_buku WHERE kode_buku = ?");
    $pdo_statement->execute([$kode_buku]);
    $result = $pdo_statement->fetchAll();

    if (count($result) > 0) {
        $data_buku = $result[0];
    } else {
        header('Location: tampil_data_buku.php');
    }
} else {
    header('Location: tampil_data_buku.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
</head>

<body>
    <h3>Edit Data Buku</h3>
    <form action="simpan_edit_data_buku.php" method="post">
        <input type="hidden" name="kode_buku" value="<?php echo $data_buku['kode_buku']; ?>" />
        <table>
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kode_buku" value="<?php echo $data_buku['kode_buku']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku" value="<?php echo $data_buku['judul_buku']; ?>"></td>
            </tr>
            <tr>
                <td>Kode Pengarang</td>
                <td><input type="text" name="kode_pengarang" value="<?php echo $data_buku['kode_pengarang']; ?>"></td>
            </tr>
            <tr>
                <td>Kode Jenis Buku</td>
                <td><input type="text" name="kode_jenis_buku" value="<?php echo $data_buku['kode_jenis_buku']; ?>"></td>
            </tr>
            <tr>
                <td>Kode Penerbit</td>
                <td><input type="text" name="kode_penerbit" value="<?php echo $data_buku['kode_penerbit']; ?>"></td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td><input type="text" name="isbn" value="<?php echo $data_buku['isbn']; ?>"></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td><input type="text" name="tahun" value="<?php echo $data_buku['tahun']; ?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi"><?php echo $data_buku['deskripsi']; ?></textarea></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value="<?php echo $data_buku['jumlah']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
