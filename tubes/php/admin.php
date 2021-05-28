<?php 

  session_start();

  if (!isset($_SESSION['login'])) {
      header("Location: ../php/login.php");
      exit;
  } else if(!isset($_SESSION['status'])) {
    header("Location: ../index.php") ;
    exit ;
  }

  // menghubungkan dengan file php lainnya
  require 'functions.php' ;

  // melakukan query
  $baju = query("SELECT * FROM baju") ;

  // ketika tombol cari ditekan
  if ( isset($_POST["cari"]) ) {
    $baju = cari($_POST["keyword"]) ;
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Admin</title>
  </head>
  <body>
    
    <!-- Navbar -->
    <div class="container">
      <nav class="navbar navbar-light mt-3">
        <div class="container-fluid">
          <a class="navbar-brand">
            Bade Creative
          </a>
            <form class="d-flex">
              <a class="btn btn-outline-light" href="../php/logout.php" role="button">Logout</a>
            </form>
        </div>
      </nav>
    </div>
    <!-- End Navbar -->

    <!-- Carousel -->
    <div class="container pt-4 pb-4">
      <h2 class="text-center">Best Offers</h2>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row py-5">
              <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/Rib-knit-Sweater.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Rib-knit Sweater</h5>
                  <p class="text-center"><small style="font-style: italic;">H&M</small></p>
                  <p class="text-center"><small><del>$19.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">$14.99</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/sweater-chasmere.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Cashmere Sweater</h5>
                  <p class="text-center"><small style="font-style: italic;">ZARA</small></p>
                  <p class="text-center"><small><del>$50.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">35.99</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/dres.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Angkle-length</h5>
                  <p class="text-center"><small style="font-style: italic;">ZARA</small></p>
                  <p class="text-center"><small><del>$40.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">$30.99</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/pink.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Rib-knit Sweater</h5>
                  <p class="text-center"><small style="font-style: italic;">H&M</small></p>
                  <p class="text-center"><small><del>$19.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">$13.99</span></small></p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
            <div class="row py-5">
              <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/putih.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Relaxed Fit T-shirt</h5>
                  <p class="text-center"><small style="font-style: italic;">H&M</small></p>
                  <p class="text-center"><small><del>$12.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">$10.99</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/blue.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Printed/T-shirts</h5>
                  <p class="text-center"><small style="font-style: italic;">H&M</small></p>
                  <p class="text-center"><small><del>$30.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">$25.99</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/Flannel-Grey.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Flannel Soft Grey</h5>
                  <p class="text-center"><small style="font-style: italic;">UNIQLO</small></p>
                  <p class="text-center"><small><del>$34.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">30.99</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/putih2.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Short-sleeved Poplin</h5>
                  <p class="text-center"><small style="font-style: italic;">UNIQLO</small></p>
                  <p class="text-center"><small><del>$34.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">$31.99</span></small></p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
            <div class="row py-5">
              <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/cottons.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Cotton polo-neck</h5>
                  <p class="text-center"><small style="font-style: italic;">ZARA</small></p>
                  <p class="text-center"><small><del>$35.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">$30.99</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/blendmerino.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Merino Wool polo</h5>
                  <p class="text-center"><small style="font-style: italic;">H&M</small></p>
                  <p class="text-center"><small><del>$39.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">$34.99</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/taupe.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Taupe Blue</h5>
                  <p class="text-center"><small style="font-style: italic;">UNIQLO</small></p>
                  <p class="text-center"><small><del>$34.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">$29.99</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <img src="../assets/img/beige.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Light Beige/NASA</h5>
                  <p class="text-center"><small style="font-style: italic;">H&M</small></p>
                  <p class="text-center"><small><del>$21.99 </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">$18.99</span></small></p>
              </div>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- End Carousel -->

      <!-- Parallax -->
      <section class="parallex">
          <div class="row py-3">
            <div class="col-lg-9 mx-auto">
              <h1>BadeCreative</h1>
              <p class="py-3">just an ordinary online shop that presents a wide variety of fashion choices with the best and world-class product quality assurance for our beloved consumers.</p>
                <a class="btn btn-white" href="#main" role="button">SEE ALL</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Parallax -->

    <!-- Main -->
    <section class="main" id="main" style="background-color: snowhite;">
      <div class="container pt-5">
        <div class="row mb-4 pt-4">
          <div class="col text-center">
            <h2>All Items</h2>
          </div>
        </div>

        <!-- Serach  -->
        <form class="d-flex pt-4" action="" method="POST">
          <input class="form-control me-2 keyword" type="text" name="keyword" placeholder="Search..">
          <button class="btn btn-outline-light tombol-cari" name="cari" type="submit" autocomplete="off">Search</button>
        </form>
        <!-- End Search -->

        <a href="../php/tambah.php" class="btn btn-warning mt-5">Tambah</a>
        
        <div class="containers">
          <table class="table table-bordered mt-5">
            <thead>
              <tr>
                <th class="text-center" scope="col">No</th>
                <th class="text-center" scope="col">Picture</th>
                <th class="text-center" scope="col">Name</th>
                <th class="text-center" scope="col">Details</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($baju as $bj) : ?>
              <tr>
                <td class="text-center pt-5"><?= $bj["id"]; ?></td>
                <td class="text-center"><img src="../assets/img/<?= $bj["img"]; ?>" width="100px" alt=""></td>
                <td class="text-center pt-5"><?= $bj["name"]; ?></td>
                <td class="text-center pt-5"><a href="../php/detail2.php?id=<?= $bj["id"]; ?>" class="btn btn-light">Details</a></td>
                <td class="text-center pt-5">
                <a href="../php/ubah.php?id=<?= $bj["id"]; ?>" class="btn btn-outline-light">Ubah</a>
                <a href="../php/hapus.php?id=<?= $bj["id"]; ?>" onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data?') ;" class="btn btn-light">Hapus</a>
                </td>              
                <?php endforeach; ?>
            </tbody>
          </table>
          </div>
        
      </div>
    </section>
    <!-- End Main -->

    <!-- Contact Us -->
      <section class="contact bg-light pt-4 text-center">
        <div class="container">
          <div class="row py-3">
            <div class="col-lg-7 mx-auto">
              <p>&copy; Copyright 2021 Uknown All Rights Reserved</p>
            </div>
          </div>
        </div>
      </section>
    <!-- End Contact Us -->  

    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    
    <!-- My JS -->
    <script src="../js/script1.js"></script>
    
  </body>
</html>
