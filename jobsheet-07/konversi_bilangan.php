<?php
    echo bindec("100011")."<br>"; 
    echo bindec("100")."<br>";      //fungsi untuk konveri biner ke desimal
    echo decbin(11)."<br>";         //fungsi untuk konveri desimal ke biner
    echo decoct(10)."<br>";         //fungsi untuk konveri desimal ke oktal
    echo octdec(12)."<br>";        //fungsi untuk konveri oktal ke desimal
    echo dechex(20)."<br>";        // fungsi untuk konversi desimal ke hexadec
    echo hexdec(14)."<br>";         // fungsi untuk konversi hexadec ke desimal
    echo number_format(453000000, 2)."<br>";    //menentukan format bilangan
    echo number_format(453000000, 2, ",", ".")."<br>"; //menentukan format bilangan

?>