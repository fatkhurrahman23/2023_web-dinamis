<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nilai_tugas = 89;        
        $nilai_uts = 90;        
        $nilai_uas = 80;
        $nilai_rata = ($nilai_tugas + $nilai_uts + $nilai_uas) / 2;
        echo "Nilai yang didapat pada mata kuliah Web Dinamis adalah ".$nilai_rata;       
    ?>
</body>
</html>