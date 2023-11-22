<?php
    include('config.php');

    $kode_jenis_buku = $_POST['kode_jenis_buku'];
    $nama_jenis_buku = $_POST['nama_jenis_buku'];

    $sql = "INSERT INTO data_jenis_buku (kode_jenis_buku, nama_jenis_buku) VALUES (:kode_jenis_buku, :nama_jenis_buku)";
    $query = $koneksi->prepare($sql);

    $query->bindParam(':kode_jenis_buku', $kode_jenis_buku);
    $query->bindParam(':nama_jenis_buku', $nama_jenis_buku);
    $query->execute();

    echo "<font color='green'>Data updated successfully.";
    header('location:tampil_data_jenis_buku.php');
?>
