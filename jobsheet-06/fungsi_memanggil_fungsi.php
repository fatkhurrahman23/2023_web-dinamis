<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rekursi</title>
</head>
<body>
    <?php
        function hitungUmur($thn_lahir, $thn_sekarang){
            $umur = $thn_sekarang - $thn_lahir;
            return $umur;
        } 
        function perkenalan($nama, $salam="Assalamualaikum"){
            echo $salam.", ";
            echo "Perkenalkan, nama saya ".$nama."<br/>";
            // memanggil fungsi lain
            echo "Saya berusia ". hitungUmur(2004, 2023) ." tahun<br/>";
            echo "Senang bertemu dengan anda<br/>";
        }
        // memanggil fungsi perkenalan
        perkenalan("Fathur");
    ?>
</body>
</html>