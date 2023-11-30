<?php
    $cookie_name = "username";
    $cookie_value = "fathur";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    if(count($_COOKIE) > 0) {
        echo "Cookie ada";
    } else {
        echo "Cookie tidak ada";
    }
?>