<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class kuliah {
            protected $jam_perkuliahan = "4 jam pertemuan";
        }
        class matkul extends kuliah {
            public function get_jam_perkuliahan() {
                return $this->jam_perkuliahan;
            }
        }
        // buat objek dari class matkul (instansiasi)
        $matkul_fathur = new matkul();
        // jalankan method get_jam_perkuliahan()
        echo $matkul_fathur->get_jam_perkuliahan();
    ?>
</body>
</html>