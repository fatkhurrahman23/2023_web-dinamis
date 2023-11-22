<?php
    include 'config.php';

    if (isset($_GET['id'])) {
        $kode_jenis_buku = $_GET['id'];
        $pdo_statement = $koneksi->prepare("SELECT * FROM data_jenis_buku WHERE kode_jenis_buku = ?");
        $pdo_statement->execute([$kode_jenis_buku]);
        $result = $pdo_statement->fetchAll();

        if (count($result) > 0) {
            $data_jenis_buku = $result[0];
        } else {
            header('Location: tampil_data_jenis_buku.php');
        }
    } else {
        header('Location: tampil_data_jenis_buku.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Jenis Buku</title>
</head>
<body>
    <h3>Edit Data Jenis Buku</h3>
    <form action="simpan_edit_data_jenis_buku.php" method="post">
        <input type="hidden" name="kode_jenis_buku" value="<?php echo $data_jenis_buku['kode_jenis_buku']; ?>" />
        <table>
            <tr>
                <td>Kode Jenis Buku</td>
                <td><input type="text" name="kode_jenis_buku" value="<?php echo $data_jenis_buku['kode_jenis_buku']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Jenis Buku</td>
                <td><input type="text" name="nama_jenis_buku" value="<?php echo $data_jenis_buku['nama_jenis_buku']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
