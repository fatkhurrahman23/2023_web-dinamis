<?php
    class laptop {
        var $pemilik;

        function hidupkan_laptop() {
            return "Hidupkan laptop";
        }
    }

    // membuat objek dari class laptop (instansiasi)
    $laptop_anto = new laptop();
    $laptop_andi = new laptop();
    $laptop_dina = new laptop();

    // set property
    $laptop_anto->pemilik="FATHUR";
    $laptop_andi->pemilik="FATHUY";
    $laptop_dina->pemilik="RAHMAN";

    // tampilkan property
    echo $laptop_anto->pemilik; echo "<br>";
    echo $laptop_andi->pemilik; echo "<br>";
    echo $laptop_dina->pemilik; echo "<br>";
?>