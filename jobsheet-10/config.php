<?php
    class Database {
        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $database = "sewa_buku";
        var $koneksi = "";
        
        function __construct() {
            $this -> koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if (mysqli_connect_errno()) {
                echo "Koneksi database gagal : " . mysqli_connect_error();
            }
        }
        function tampil_data() {
            $data = mysqli_query($this->koneksi, "SELECT a.*, b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin");
            while($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
        function tampil_data_jenis_kelamin() {
            $data_jenis_kelamin = mysqli_query($this->koneksi, "SELECT * FROM jenis_kelamin");
            while($row_jenis_kelamin = mysqli_fetch_array($data_jenis_kelamin)) {
                $hasil_jenis_kelamin[] = $row_jenis_kelamin;
            }
            return $hasil_jenis_kelamin;
        }
        function tambah_data_peminjam($kode_peminjaman, $nama_peminjam, $jenis_kelamin, $tanggal_lahir, $alamat, $pekerjaan) {
            mysqli_query($this->koneksi, "INSERT INTO data_peminjam (id, kode_peminjam, nama_peminjam, jenis_kelamin, tanggal_lahir, alamat, pekerjaan)
                VALUES('', '$kode_peminjaman', '$nama_peminjam', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$pekerjaan')");
        }
        function kode_peminjam($kode_peminjam){
            $data_peminjam = mysqli_query($this->koneksi, "SELECT a.*, b.* FROM data_peminjam a INNER JOIN jenis_kelamin b ON b.kode_jk = a.jenis_kelamin WHERE a.kode_peminjam='$kode_peminjam'");
            while($row_peminjam = mysqli_fetch_array($data_peminjam)) {
                $hasil_peminjam[] = $row_peminjam;
            }
            return $hasil_peminjam;
        }
        function edit_data_peminjam($kode_peminjam, $nama_peminjam, $jenis_kelamin, $tanggal_lahir, $alamat, $pekerjaan) {
            mysqli_query($this->koneksi, "UPDATE data_peminjam SET nama_peminjam='$nama_peminjam', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat', pekerjaan='$pekerjaan' WHERE kode_peminjam='$kode_peminjam'");
        }
        function hapus_data_peminjam($kode_peminjam) {
            mysqli_query($this->koneksi, "DELETE FROM data_peminjam WHERE kode_peminjam='$kode_peminjam'");
        }
        function tambah_data_jenis_buku($kode_jenis_buku, $nama_jenis_buku) {
            mysqli_query($this->koneksi, "INSERT INTO data_jenis_buku VALUES ('','$kode_jenis_buku', '$nama_jenis_buku')");
        }
        function tampil_data_jenis_buku(){
            $data = mysqli_query($this->koneksi, "SELECT * FROM data_jenis_buku");
            while($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
        function tambah_data_penerbit($kode_penerbit, $nama_penerbit) {
            mysqli_query($this->koneksi, "INSERT INTO data_penerbit VALUES ('','$kode_penerbit', '$nama_penerbit')");
        }
        function tampil_data_penerbit() {
            $data = mysqli_query($this->koneksi, "SELECT * FROM data_penerbit");
            while($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
        function tambah_data_pengarang($kode_pengarang, $nama_pengarang) {
            mysqli_query($this->koneksi, "INSERT INTO data_pengarang VALUES ('','$kode_pengarang', '$nama_pengarang')");
        }
        function tampil_data_pengarang() {
            $data = mysqli_query($this->koneksi, "SELECT * FROM data_pengarang");
            while($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
        function ambil_data_pengarang() {
            $data = mysqli_query($this->koneksi, "SELECT * FROM data_pengarang");
            while($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
        function ambil_data_jenis_buku() {
            $data = mysqli_query($this->koneksi, "SELECT * FROM data_jenis_buku");
            while($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
        function ambil_data_penerbit() {
            $data = mysqli_query($this->koneksi, "SELECT * FROM data_penerbit");
            while($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
        function tambah_data_buku($kode_buku, $judul_buku, $kode_pengarang, $kode_jenis_buku, $kode_penerbit, $isbn, $tahun, $deskripsi, $jumlah_buku) {
            mysqli_query($this->koneksi, "INSERT INTO data_buku VALUES ('','$kode_buku', '$judul_buku', '$kode_pengarang', '$kode_jenis_buku', '$kode_penerbit', '$isbn', '$tahun', '$deskripsi', '$jumlah_buku')");
        }
        function tampil_data_buku(){
            $data = mysqli_query($this->koneksi, "SELECT a.*, b.*, c.*, d.* FROM data_buku a INNER JOIN data_pengarang b ON b.kode_pengarang = a.kode_pengarang INNER JOIN data_jenis_buku c ON c.kode_jenis_buku = a.kode_jenis_buku INNER JOIN data_penerbit d ON d.kode_penerbit = a.kode_penerbit /*INNER JOIN data_peminjam e ON e.kode_peminjam = a.kode_peminjam*/");
            while($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }
?>