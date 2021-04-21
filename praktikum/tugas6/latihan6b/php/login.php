<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php
session_start();
require 'functions.php';

// melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: ../php/admin.php");
    exit;
}

    // Login
    if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    
    // mencocokan USERNAME dan PASSWORD 
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
       if (password_verify($password, $row['password'])) {
           $_SESSION['username'] = $_POST['username'];
           $_SESSION['hash'] = hash('sha256', $row['id'], false);
       }
       if (hash('sha256', $row['id'] == $_SESSION['hash'])) {
           header("Location: admin.php");
           die;
       }
       header("Location: ../index.php");
       die;
    }  
    $error = true;
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

    <!-- MetroUI -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

    <title>Login</title>
</head>
<body>
  <div class="main">
    <p class="sign" align="center">Login</p>
    <form action="" method="post" class="form1">
        <?php if(isset($error)) : ?>
            <p class="mb-1" style="color : red; font-style: italic;" align="center">Username atau Password Salah</p>
        <?php endif; ?>
      <input class="un " name="username" id="username" type="text" align="center" placeholder="Username">
      <input class="pass" name="password" id="password" type="password" align="center" placeholder="Password">
      <button class="submit" name="submit" type="submit" align="center">Login</button>
      <p class="remember" align="center"><a href="#">Remember me</p>     
    </form>

    <div class="registrasi mb-4">
        <p class="remember" align="center"><a href="registrasi.php">Register Here!</a></p>
    </div>

    </div>
</body>
</html>