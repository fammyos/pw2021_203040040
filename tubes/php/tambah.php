<?php 

  session_start() ;

  if (!isset($_SESSION['login'])) {
      header("Location: ../php/login.php");
      exit;
  }

    // koneksi ke DBMS
    require 'functions.php' ;

    // // cek tombol submit sudah ditekan atau belum
    if ( isset($_POST['tambah']) ) {
        // cek data apakah berhasil atau tidak
          if ( tambah($_POST) > 0 ) {
              echo "<script>
                      alert('Data Berhasil Ditambahkan!') ;
                      document.location.href = '../php/admin.php' ;
                    </script>
                   " ;
          } else {
            echo "<script>
                    alert('Data Gagal Ditambahkan!') ;
                    document.location.href = '../php/admin.php' ;
                  </script>
                 " ;
          }
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

    <title>Insert Data</title>
  </head>
  <body>
    <!-- Form -->
    <h3 class="text-center pt-5">Insert Data</h3>

    <div class="container pt-3">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="img" class="col-sm-2 col-form-label">Image</label>
                    <input type="file" class="form-control" id="img" name="img">
            </div>
            <div class="mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Text Input" required autofocus>
            </div>
            <div class="mb-3">
                <label for="size" class="col-sm-2 col-form-label">Size</label>
                    <input type="text" class="form-control" id="size" name="size" placeholder="Text Input" required>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                    <input class="form-control" type="text" placeholder="Text Input" id="brand" name="brand">
            </div>
            <div class="mb-3">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="$" required>
            </div>
            <div class="mb-3">
                <label for="category class="col-sm-2 col-form-label">Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Text Input" required>
            </div>
            <div class="mb-3">
                <label for="info" class="col-sm-2 col-form-label">Info</label>
                    <input type="text" class="form-control" id="info" name="info" placeholder="Text Input" required>
            </div>            
            <button type="submit" name="tambah" class="btn btn-outline-primary">Submit</button>
            <a class="btn btn-primary" type="cancel" href="../php/admin.php" name="cancel" role="button">Cancel</a>
        </form>
    </div>
    <!-- End Form -->

    

    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

 
  </body>
</html>