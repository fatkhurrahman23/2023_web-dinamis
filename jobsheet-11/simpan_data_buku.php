<?php
include('config.php');

$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$kode_pengarang = $_POST['kode_pengarang'];
$kode_jenis_buku = $_POST['kode_jenis_buku'];
$kode_penerbit = $_POST['kode_penerbit'];
$isbn = $_POST['isbn'];
$tahun = $_POST['tahun'];
$deskripsi = $_POST['deskripsi'];
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO data_buku (kode_buku, judul_buku, kode_pengarang, kode_jenis_buku, kode_penerbit, isbn, tahun, deskripsi, jumlah) VALUES (:kode_buku, :judul_buku, :kode_pengarang, :kode_jenis_buku, :kode_penerbit, :isbn, :tahun, :deskripsi, :jumlah)";
$query = $koneksi->prepare($sql);

$query->bindParam(':kode_buku', $kode_buku);
$query->bindParam(':judul_buku', $judul_buku);
$query->bindParam(':kode_pengarang', $kode_pengarang);
$query->bindParam(':kode_jenis_buku', $kode_jenis_buku);
$query->bindParam(':kode_penerbit', $kode_penerbit);
$query->bindParam(':isbn', $isbn);
$query->bindParam(':tahun', $tahun);
$query->bindParam(':deskripsi', $deskripsi);
$query->bindParam(':jumlah', $jumlah);

$query->execute();

echo "<font color='green'>Data updated successfully.";
header('location:tampil_data_buku.php');
?>
