<?php
    session_start();
    $username = $_SESSION['username'];
    include_once "config.php";
    $db = new database();

    foreach ($db->login($username) as $x) {
        $akses_id = $x['akses_id'];
        if ($akses_id == '1') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'config.php';
        $db = new Database();
    ?>
    <h3>Tambah Data pengarang</h3>
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
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
        } else {
            echo "Anda belum login";
            header("location:login.php");
        }
    }
?>