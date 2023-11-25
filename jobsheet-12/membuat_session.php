<?php
    session_start();
    
    $_SESSION["username"] = "fathur123";
    $_SESSION["password"] = "password123";
    echo 'Username: ' . $_SESSION["username"] . '<br>';
    echo 'Password: ' . $_SESSION["password"] . '<br>';
?>