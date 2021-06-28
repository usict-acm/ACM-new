<?php
    // echo '<script>alert("Kardu?")</script>';
    session_start();
    session_unset();
    session_destroy();
    header('location: auth/login.php');
?>