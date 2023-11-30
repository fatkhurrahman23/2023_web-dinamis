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
        include_once "menu_admin.html";
        $db = new database();
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Jenis Buku</th>
            <th>Penerbit</th>
            <th>ISBN</th>
            <th>Tahun</th>
            <th>Deskripsi</th>
            <th>Jumlah Buku</th>
        </tr>
        <?php
            $no = 1;
            foreach($db->tampil_data_buku() as $x) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $x['kode_buku']; ?></td>
            <td><?php echo $x['judul_buku']; ?></td>
            <td><?php echo $x['nama_pengarang']; ?></td>
            <td><?php echo $x['nama_jenis_buku']; ?></td>
            <td><?php echo $x['nama_penerbit']; ?></td>
            <td><?php echo $x['isbn']; ?></td>
            <td><?php echo $x['tahun']; ?></td>
            <td><?php echo $x['deskripsi']; ?></td>
            <td><?php echo $x['jumlah']; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
<?php
        } else {
            echo "Anda belum login";
            header("location:login.php");
        }
    }
?>