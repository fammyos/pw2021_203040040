<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php
    session_start();
    session_destroy();

    setcookie('username', '', time() - 3600);
    setcookie('hash', '', time() - 3600);

    header("Location: ../index.php");
    die;
?>
