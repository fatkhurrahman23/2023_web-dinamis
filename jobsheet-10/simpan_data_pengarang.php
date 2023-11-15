<?php
    include 'config.php';
    $db = new Database();
    $db->tambah_data_pengarang($_POST['kode_pengarang'], $_POST['nama_pengarang']);
    header("location:tampil_data_pengarang.php");
?>