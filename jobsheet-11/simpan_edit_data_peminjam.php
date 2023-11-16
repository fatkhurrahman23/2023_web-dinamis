<?php
    include "config.php";
    $kode_peminjam = $_POST['kode_peminjam'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    $sql = "UPDATE data_peminjam SET nama_peminjam='$nama_peminjam', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat', pekerjaan='$pekerjaan' WHERE kode_peminjam='$kode_peminjam'";
    $query = $koneksi->prepare($sql);

    $query->bindParam(':kode_peminjam', $kode_peminjam);
    $query->bindParam(':nama_peminjam', $nama_peminjam);
    $query->bindParam(':jenis_kelamin', $jenis_kelamin);
    $query->bindParam(':tanggal_lahir', $tanggal_lahir);
    $query->bindParam(':alamat', $alamat);
    $query->bindParam(':pekerjaan', $pekerjaan);
    $query->execute();
    
    echo "<font color='green'>Data berhasil diubah.";
    header("location: tampilkan_data_peminjam.php");
?>