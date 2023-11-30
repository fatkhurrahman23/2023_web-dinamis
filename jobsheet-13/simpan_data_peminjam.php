<?php
    include_once('config.php');
    $koneksi = new Database();

    $cekdir = is_dir("foto_peminjam");
    if ($cekdir) {
        opendir("foto_peminjam");
    } else {
        mkdir("foto_peminjam");
        chmod("foto_peminjam", 0755);
        opendir("foto_peminjam");
    }

    $daftar_list = array("jpg", "png", "jpeg");
    $nama_file = $_FILES['foto_peminjam']['name'];
    $pecah = explode(".", $nama_file);
    $ekstensi = $pecah[1];
    if (in_array($ekstensi, $daftar_list)) {
        $lokasi_foto_peminjam = $_FILES["foto_peminjam"]["tmp_name"];
        $nama_foto_peminjam = $_FILES["foto_peminjam"]["name"];
        $dir_foto_peminjam = "foto_peminjam/$nama_foto_peminjam";
        move_uploaded_file($lokasi_foto_peminjam, $dir_foto_peminjam);
        $koneksi -> tambah_data_peminjam($_POST['kode_peminjam'], $_POST['nama_peminjam'], $_POST['jenis_kelamin'], $_POST['tanggal_lahir'], $_POST['alamat'], $_POST['pekerjaan'], $dir_foto_peminjam);
        header("location:tampilkan_data_peminjam.php");
    } else {
        echo "File yang diupload harus berupa gambar <br>";
        header("location:tampilkan_data_peminjam.php");
    }
?>