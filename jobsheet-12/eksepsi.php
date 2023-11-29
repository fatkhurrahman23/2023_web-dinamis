<?php
    function pembagian(float $a, float $b) {
        $hasil = $a / $b;
        return $hasil;
    }

    $a = 5;
    $b = 0;

    if ($b == 0) {
        echo "Tidak bisa dilakukan pembagian dengan 0, ganti nilai variabel \$b";
    } else {
        print("$a/$b = ".pembagian($a, $b)."<br>");
    }
?>