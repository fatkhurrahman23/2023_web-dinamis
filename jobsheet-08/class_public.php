<?php
    class kuliah {
        // buat public property
        public $nama_mahasiswa;
        // buat public method
        public function masuk_kuliah(){
            return " masuk kuliah";
        }
    }
    // buat objek dari class kuliah (instansiasi)
    $kuliah_fathur = new kuliah();
    // set property
    $kuliah_fathur->nama_mahasiswa="Fathur Rahman";
    // tampilkan property
    echo $kuliah_fathur->nama_mahasiswa;
    // tampilkan method
    echo $kuliah_fathur->masuk_kuliah();
?>