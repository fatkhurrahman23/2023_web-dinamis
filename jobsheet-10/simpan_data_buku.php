<?php
    include 'config.php';
    $koneksi = new Database();
    $koneksi->tambah_data_buku($_POST['kode_buku'], $_POST['judul_buku'], $_POST['kode_pengarang'], $_POST['kode_jenis_buku'], $_POST['kode_penerbit'], $_POST['isbn'], $_POST['tahun'], $_POST['deskripsi'], $_POST['jumlah_buku']);
    header("location: tampil_data_buku.php");
?>