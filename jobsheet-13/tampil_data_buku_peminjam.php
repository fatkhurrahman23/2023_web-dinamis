<?php
    session_start();
    $username = $_SESSION['username'];
    include_once "config.php";
    $db = new database();

    foreach ($db->login($username) as $x) {
        $akses_id = $x['akses_id'];
        if ($akses_id == '2') {
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
        include_once "menu_peminjam.html";
        $db = new database();
    ?>  
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Jenis Buku</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach($db->tampil_data_buku() as $x) {
                ?>
                <tr>
                    <th><?php echo $no++; ?></th>
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
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
        } else {
            echo "Anda belum login";
            header("location:login.php");
        }
    }
?>