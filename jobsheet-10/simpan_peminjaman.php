<?php
    include 'config.php';
    $db = new Database();
    $db->tambah_peminjaman($_POST['kode_buku'], $_POST['kode_peminjam']);
    header("location:tampil_peminjaman.php");
?>