<?php
    session_start();
    session_unset();
    session_destroy();
    
    $_SESSION['loggedin'] = false;
    header("location:http://localhost/PHP-MVC-ecommerce/?controller=pages&action=home");
    die();
?>
