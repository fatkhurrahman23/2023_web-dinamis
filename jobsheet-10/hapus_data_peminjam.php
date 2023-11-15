<?php
    include('config.php');
    $db = new Database();
    if (isset($_GET['id'])) {
        $kode_peminjam = $_GET['id'];
        $db->hapus_data_peminjam($kode_peminjam);
        header('location:tampilkan_data_peminjam.php');
    } else {
        header('location:tampilkan_data_peminjam.php');
    }
?>