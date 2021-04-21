<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
require 'functions.php' ;

    // pengecekan apakah user sudah melakukan login, jika sudah redirect ke halaman admin
    if( isset($_SESSION['username']) ) {
        header("Location : ../php/admin.php") ;
        exit ;
    }

    // login
    if( isset($_POST['submit']) ) {
        
        $username = $_POST['username'] ;
        $password = $_POST['password'] ;   

        $cek_user = $mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'") ;

        // cek username dan password
        if(mysqli_num_rows($cek_user) > 0 ) {
            $row = mysqli_fetch_assoc($cek_user) ;

            if($password == $row['password']) {
                $_SESSION['username'] = $_POST['username'] ;
                $_SESSION['hash'] = $row['id'] ; 
            }

            if($row['id'] == $_SESSION['hash']) {
                header("Location : ../php/admin.php") ;
                die ;
            }

            header("Location : ../php/index.php") ;
            die ;
        }

        $error = true ;
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
    <p class="sign" align="center">Login</p>
    <form action="" method="post" class="form1">
        <?php if(isset($error)) : ?>
            <p style="color : red; font-style: italic;">Username atau Password Salah</p>
        <?php endif; ?>
      <input class="un " name="username" id="username" type="text" align="center" placeholder="Username">
      <input class="pass" name="password" id="password" type="password" align="center" placeholder="Password">
      <a class="submit" name="submit" type="submit" align="center">Login</a>
      <p class="remember" align="center"><a href="#">Remember me</p>     
    </div>
</body>
</html>