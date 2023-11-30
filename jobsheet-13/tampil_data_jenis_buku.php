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
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode jenis buku</th>
            <th>Nama jenis buku</th>
        </tr>
        <?php
            $no = 1;
            foreach($db->tampil_data_jenis_buku() as $x) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $x['kode_jenis_buku']; ?></td>
                    <td><?php echo $x['nama_jenis_buku']; ?></td>
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