<?php
    setcookie("username", "", time() - 3600);
    echo "Cookie 'username' berhasil dihapus.";
?>