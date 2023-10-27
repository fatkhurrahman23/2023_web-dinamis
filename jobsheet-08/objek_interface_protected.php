<?php
    interface mahasiswa {
        public function masuk_kuliah();
        protected function praktikum();
    }
    class mhs_informatika implements mahasiswa {
        public function masuk_kuliah(){
            return "Mengikuti perkuliahan...";
        }
        public function praktikum(){
            return "Melakukan praktikum...";
        }
    }
    $mhs_baru = new mhs_informatika();
    echo $mhs_baru->masuk_kuliah();
?>