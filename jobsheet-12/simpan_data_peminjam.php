<?php
    session_start();
    $username = $_SESSION['username'];
    include "config.php";
    $db = new database();

    foreach ($db->login($username) as $x) {
        $akses_id = $x['akses_id'];
        if ($akses_id == '1') {
            include_once('config.php');
            $koneksi = new Database();
            $koneksi -> tambah_data_peminjam($_POST['kode_peminjam'], $_POST['nama_peminjam'], $_POST['jenis_kelamin'], $_POST['tanggal_lahir'], $_POST['alamat'], $_POST['pekerjaan']);
            header("location:tampilkan_data_peminjam.php");
        } else {
            echo "Anda belum login";
            header("location:login.php");
        }
    }
?>