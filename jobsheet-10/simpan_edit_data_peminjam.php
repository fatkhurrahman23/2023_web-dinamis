<?php
    include('config.php');
    $jenis_kelamin = $_POST['jenis_kelamin'];
    if($jenis_kelamin == 'Perempuan') {
        $kode_jenis_kelamin = 'P';
    } else if ($jenis_kelamin == 'Laki-laki') {
        $kode_jenis_kelamin = 'L';
    }

    $koneksi = new Database();
    $koneksi -> edit_data_peminjam($_POST['kode_peminjam'], $_POST['nama_peminjam'], $kode_jenis_kelamin, $_POST['tanggal_lahir'], $_POST['alamat'], $_POST['pekerjaan']);
    header("location:tampilkan_data_peminjam.php");
?>