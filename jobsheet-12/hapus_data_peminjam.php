<?php
    session_start();
    $username = $_SESSION['username'];
    include_once "config.php";
    $db = new database();

    foreach ($db->login($username) as $x) {
        $akses_id = $x['akses_id'];
        if ($akses_id == '1') {
            // utama
            include_once('config.php');
            $db = new Database();
            if (isset($_GET['id'])) {
                $kode_peminjam = $_GET['id'];
                $db->hapus_data_peminjam($kode_peminjam);
                header('location:tampilkan_data_peminjam.php');
            } else {
                header('location:tampilkan_data_peminjam.php');
            }
        } else {
            echo "Anda belum login";
            header("location:login.php");
        }
    }
?>