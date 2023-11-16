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
    <h3>Peminjaman buku</h3>
    <form action="simpan_peminjaman.php" method="post">
        <table>
            <tr>Judul Buku</tr>
            <tr>
                <select name="kode_buku">
                    <option value="--">
                        <?php
                            $pdo_statement = $koneksi->prepare("SELECT * FROM data_buku");
                            $pdo_statement->execute();
                            $result = $pdo_statement->fetchAll();
                            $no = 1;
                            foreach ($result as $x) {
                                echo '<option value="'.$x['kode_buku'].'">'.$x['judul_buku'].'</option>';
                            }
                        ?>
                    </option>
                </select>
            </tr>
            <tr>
                <td>Peminjam</td>
                <td>
                    <select name="kode_peminjam">
                        <option value="--"></option>
                            <?php
                                $pdo_statement = $koneksi->prepare("SELECT * FROM data_peminjam");
                                $pdo_statement->execute();
                                $result = $pdo_statement->fetchAll();
                                $no = 1;
                                foreach ($result as $x) {
                                    echo '<option value="'.$x['kode_peminjam'].'">'.$x['nama_peminjam'].'</option>';
                                }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
</body>
</html>