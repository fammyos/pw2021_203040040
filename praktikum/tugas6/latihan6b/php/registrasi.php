<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php
require 'functions.php';
if (isset($_POST["register"]) ) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = '../php/login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>"; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/login.css">

    <title>Login</title>
</head>
<body>
  <div class="main">
    <p class="sign" align="center">Registration</p>
    <form action="" method="post" class="form1">
        <?php if(isset($error)) : ?>
            <p style="color : red; font-style: italic;">Username atau Password Sudah digunakan!</p>
        <?php endif; ?>
      <input class="un " name="username" id="username" type="text" align="center" placeholder="Username">
      <input class="pass" name="password" id="password" type="password" align="center" placeholder="Password">
      <button class="submit" name="register" type="submit" align="center">Create</button>
    </div>
</body>
</html>