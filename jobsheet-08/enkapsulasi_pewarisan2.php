<?php
    // parent class
    class Mahasiswa {
        protected $nim;
        public function setNim($nim) {
            $this->nim = $nim;
        }
    }
    // child class
    class mhs_informatika extends Mahasiswa {
        public function hello() {
            return "Halo, NIM saya <b>" . $this->nim . "</b><br />";
        }
    }
    // buat objek dari class mhs_informatika (instansiasi)
    $mhs_informatika1 = new mhs_informatika();
    // set nim
    $mhs_informatika1->setNim("123456");
    // tampilkan method
    echo $mhs_informatika1->hello();
?>
