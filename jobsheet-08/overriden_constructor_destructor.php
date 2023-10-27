<?php
    class mahasiswa{
        public function __construct(){
            echo "Constructor dari class mahasiswa <br/>";
        }
        public function __destruct(){
            echo "Destructor dari class mahasiswa <br/>";
        }
    }
    // turunkan class mahasiswa ke class mhs_informatika
    class mhs_informatika extends mahasiswa{
        public function __construct(){
            echo "Constructor dari class mhs_informatika <br/>";
        }
        public function __destruct(){
            echo "Destructor dari class mhs_informatika <br/>";
        }
    }
    // turunkan class mhs_informatika ke class kelas_reguler
    class kelas_reguler extends mhs_informatika{
        public function __construct(){
            echo "Constructor dari class kelas_reguler <br/>";
        }
        public function __destruct(){
            echo "Destructor dari class kelas_reguler <br/>";
        }
    }
    // buat objek dari class kelas_reguler (instansiasi)
    $mhs_baru = new kelas_reguler();
    echo "Belajar OOP PHP <br/>";
?>