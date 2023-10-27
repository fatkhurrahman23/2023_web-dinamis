<?php
    abstract class mahasiswa {
        abstract public function masuk_kuliah();
    }
    class mhs_informatika extends mahasiswa {
        public function masuk_kuliah(){
            return "Mahasiswa informatika masuk kuliah";
        }
    }
    class mhs_trk extends mahasiswa {
        public function masuk_kuliah(){
            return "Mahasiswa teknologi rekayasa komputer masuk kuliah";
        }
    }
    class mhs_mesin extends mahasiswa {
        public function masuk_kuliah(){
            return "Mahasiswa teknik mesin masuk kuliah";
        }
    }
    $Dina = new mhs_informatika();
    $Doni = new mhs_trk();

    echo "<b>Kegiatan mahasiswa: </b><br>";
    echo $Dina->masuk_kuliah()."<br>";
    echo $Doni->masuk_kuliah();
?>