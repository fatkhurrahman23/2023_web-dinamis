<?php
    $cookie_name = "user";
    $cookie_value = "Fathur";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 hari 

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie bernama '" . $cookie_name . "' belum diatur";
    } else {
        echo "Cookie '" . $cookie_name . "' sudah diatur<br>";
        echo "Nilai " . $_COOKIE[$cookie_name];
    }
?>