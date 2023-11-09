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
            $data = mysqli_query($this->koneksi, "SELECT * FROM data_peminjam");
            while($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }
?>