<?php
    $kalimat = "selamat pagi....";
    echo strlen($kalimat)."<br>"; // strln untuk menghitung jumlah karakter
    echo strtoupper($kalimat)."<br>"; // strtoupper untuk mengubah menjadi huruf kapital
    echo strtolower($kalimat)."<br>"; // strtolower untuk mengubah menjadi huruf kecil
    echo ucfirst($kalimat)."<br>"; // ucfirst untuk mengubah huruf pertama menjadi kapital
    echo ucwords($kalimat)."<br>"; // ucwords untuk mengubah huruf pertama setiap kata menjadi kapital
    echo substr($kalimat, 2, 4)."<br>"; // substr untuk mengambil sebagian string
    echo substr_count($kalimat, "a")."<br>"; // substr_count untuk menghitung jumlah karakter
    echo strpos($kalimat, "p")."<br>"; // strpos untuk mencari posisi karakter
    echo strrev($kalimat)."<br>"; // strrev untuk membalikkan string
    echo str_replace("pagi", "siang", $kalimat)."<br>"; // str_replace untuk mengganti string    
?>