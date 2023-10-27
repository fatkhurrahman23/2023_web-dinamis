<?php
    class kuliah {
        // buat protected property
        protected $nama_mahasiswa = "Fathur Rahman";
        
        public function akses_mahasiswa(){
            return $this->nama_mahasiswa;
        }
        protected function masuk_kuliah(){
            return " masuk kuliah";
        }
        public function masuk_kelas(){
            return $this->masuk_kuliah();
        }
    }
    // buat objek dari class kuliah (instansiasi)
    $kuliah_fathur = new kuliah();
    // jalankan method akses_mahasiswa
    echo $kuliah_fathur->akses_mahasiswa();
    // jalankan method masuk_kelas
    echo $kuliah_fathur->masuk_kelas();
?> 