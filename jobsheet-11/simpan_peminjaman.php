<?php
    include 'config.php';
    $kode_buku = $_POST['kode_buku'];
    $kode_peminjam = $_POST['kode_peminjam'];
    $tanggal_pinjam = date('Y-m-d');
    $tanggal_kembali = date('Y-m-d', time() + (60 * 60 * 24 * 7));
    $status = 1;

    $sql = "INSERT INTO peminjaman(kode_buku, kode_peminjam, tanggal_pinjam, tanggal_kembali, status) VALUES(:kode_buku, :kode_peminjam, :tanggal_pinjam, :tanggal_kembali, :status)";
    $query = $koneksi->prepare($sql);

    $query->bindParam(':kode_buku', $kode_buku);
    $query->bindParam(':kode_peminjam', $kode_peminjam);
    $query->bindParam(':tanggal_pinjam', $tanggal_pinjam);
    $query->bindParam(':tanggal_kembali', $tanggal_kembali);
    $query->bindParam(':status', $status);
    $query->execute();
    header("location: tampilkan_peminjaman.php");
?>