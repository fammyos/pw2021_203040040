<?php
session_start();

// melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['login'])) {
    header("Location: ../php/admin.php");
    exit;
}

require 'functions.php';

// ketika tombol login ditekan
if(isset($_POST['login'])) {
    $login = login($_POST) ;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>Sign In</title>
  </head>
  <body>
  <div class="container pt-5 pr-5" style="max-width: 540px; margin-top: 150px;">
            <div class="card border-warning text-center">
            <form action="" method="POST">
                <div class="card-header bg-warning">
                    Sign In
                </div>
                <div class="card-body">
                <?php if(isset($login['error'])) : ?>
                    <p style="color: red; font-style:italic ;"><?= $login['pesan'] ; ?></p>
                <?php endif ; ?>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class='bx bx-user'></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" autocomplete="off" autofocus required>
                    </div>

                    <div class="input-group flex-nowrap pt-3">
                        <span class="input-group-text" id="addon-wrapping"><i class='bx bxs-key'></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" required>
                    </div>

                    <div class="input-group flex-nowrap pt-3">
                        <button type="submit" name="login" class="btn btn-primary">Sign In</button>
                    </div>
                </div>
                <div class="card-footer text-muted bg-warning">
                    <a href="../php/registrasi.php" class="text-dark">Doesn't Have Account?</a>
                </div>
            </div>
            </form>  
        </div>


    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>