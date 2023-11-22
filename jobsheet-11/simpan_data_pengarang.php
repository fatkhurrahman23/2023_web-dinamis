<?php
    include('config.php');

    $kode_pengarang = $_POST['kode_pengarang'];
    $nama_pengarang = $_POST['nama_pengarang'];

    $sql = "INSERT INTO data_pengarang (kode_pengarang, nama_pengarang) VALUES (:kode_pengarang, :nama_pengarang)";

    $query = $koneksi->prepare($sql);

    $query->bindParam(':kode_pengarang', $kode_pengarang);
    $query->bindParam(':nama_pengarang', $nama_pengarang);
    $query->execute();

    echo "<font color='green'>Data updated successfully.";
    header('location:tampil_data_pengarang.php');
?>
