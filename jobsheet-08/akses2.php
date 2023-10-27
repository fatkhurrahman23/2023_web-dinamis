<?php
    class laptop {
        var $pemilik;
        var $merk;
        var $ukuran_layar;

        function hidupkan_laptop() {
            return "Hidupkan laptop";
        }
        function matikan_laptop() {
            return "Matikan laptop";
        }
    }

    $laptop_anto = new laptop();

    $laptop_anto->pemilik="FATHUR";
    $laptop_anto->merk="LENOVO";
    $laptop_anto->ukuran_layar="15 inchi";

    echo $laptop_anto->pemilik; echo "<br>";
    echo $laptop_anto->merk; echo "<br>";
    echo $laptop_anto->ukuran_layar; echo "<br>";

    echo $laptop_anto->hidupkan_laptop(); echo "<br>";
    echo $laptop_anto->matikan_laptop(); echo "<br>";

?>