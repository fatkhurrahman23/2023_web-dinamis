<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // buat class induk: mahasiswa
        class mahasiswa {
            public $nama;
            public $nim;
            public $alamat;
            
            public function kuliah() {
                return "sedang mengikuti kuliah";
            }
        }
        // turunkan class dari class mahasiswa ke class mhs_informatika
        class mhs_informatika extends mahasiswa {
            public function belajar_pemrograman() {
                return "nama: $this->nama, nim: $this->nim, 
                alamat: $this->alamat";
            }
        }
        // buat objek dari class mhs_informatika (instansasi)
        $mhs_informatika_baru = new mhs_informatika();
        // isi property objek
        $mhs_informatika_baru->nama = "Fathur";
        $mhs_informatika_baru->nim = "1234567890";
        $mhs_informatika_baru->alamat = "Pati";
        //panggil method objek
        echo $mhs_informatika_baru->kuliah(); echo "<br />";
        echo $mhs_informatika_baru->belajar_pemrograman();
    ?>
</body>
</html>