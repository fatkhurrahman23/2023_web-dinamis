<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class mahasiswa {
            public function data_mahasiswa() {
                return "Nama mahasiswa: Fathur, nim: 1234, Alamat: Pati";
            }
        }
        // turunkan class dari class mahasiswa ke class mhs_informatika
        class mhs_informatika extends mahasiswa {
            public function data_mahasiswa() {
                return "Nama mahasiswa: Rahman, nim: 0987, Alamat: Patee";
            }
        }
        // buat objek dari class mhs_informatika (instansiasi)
        $mhs_informatika_baru = new mhs_informatika();
        //panggil method 
        echo $mhs_informatika_baru->data_mahasiswa();
    ?>
</body>
</html>