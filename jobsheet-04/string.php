<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php
        echo strlen("Selamat pagi"); echo "<br>"; //strlen fungsi untuk menghitung jumlah karakter
        echo str_word_count("Selamat pagi"); echo "<br>"; //str_word_count fungsi untuk menghitung jumlah kata
        echo str_replace("Fatkhur", "Rahman", "Nama saya Fathur"); echo "<br>"; //str_replace fungsi untuk mengganti string
        echo substr("Selamat pagi", 2, 6); echo "<br>"; //substr fungsi untuk memotong string
        echo strtolower("Selamat PAGI"); echo "<br>"; //strtolower fungsi untuk mengubah string menjadi huruf kecil
        echo strtoupper("Selamat PAGI"); echo "<br>"; //strtoupper fungsi untuk mengubah string menjadi huruf besar
        echo ucfirst("awal paragraf"); echo "<br>"; //ucfirst fungsi untuk mengubah huruf pertama string menjadi huruf besar
        echo ucwords("teknologi rekayasa komputer polines"); echo "<br>"; //ucwords fungsi untuk mengubah huruf pertama setiap kata menjadi huruf besar
    ?>
</body>
</html>