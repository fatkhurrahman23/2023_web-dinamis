<?php
    class kuliah {
        // buat protected property
        protected $nama_mahasiswa;
        // buat protected method
        protected function masuk_kuliah(){
            return " masuk kuliah";
        }
    }
    // buat objek dari class kuliah (instansiasi)
    $kuliah_fathur = new kuliah();
    // set protected property akan menghasilkan error
    $kuliah_fathur->nama_mahasiswa="Fathur Rahman";

    // tampilkan protected property akan menghasilkan error
    echo $kuliah_fathur->nama_mahasiswa;

    // jalankan protected method akan menghasilkan error
    echo $kuliah_fathur->masuk_kuliah();
?>