<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
    // menghubungkan dengan file php lainnya
    require 'php/functions.php' ;

    // melakukan query dengan memanggil functionnya
    $baju = query("SELECT * FROM baju") ;

    // ketika tombol cari ditekan
    if ( isset($_POST["cari"]) ) {
        $baju = cari($_POST["keyword"]) ;
      }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <title>Bade Project</title>

  </head>
  <body>
  <div class="container mt-5 mb-5">
  <h2 class="text-center pt-5 pb-5">Bade<i>Project</i></h2>

  <form action="" method="post">
  <div class="field has-addons">
  <div class="control">
    <input class="input" type="text" name="keyword" placeholder="Find your style" size="30px" autofocus autocomplete="off">
    <br><br>
  </div>
  <div class="control">
    <button class="button is-info" type="submit" name="cari">
      Search
    </button>
  </div>
</div>
</form>

  <table class="table table-border cell-border">
    <thead>
    <tr>
        <th>No</th>
        <th class="text-center">Picture</th>
        <th class="text-center">Name</th>
        <th class="text-center">Size</th>
        <th class="text-center">Brand</th>
        <th class="sortable-column text-center">Price</th>
        <th class="text-center">Category</th>
        <th class="text-center">Details</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($baju as $bj) : ?>
            <tr>
                <td class="text-center"><?= $bj["id"]; ?></td>
                <td class="text-center"><img src="../latihan5e/assets/img/<?= $bj["img"]; ?>" alt=""></td>
                <td class="text-center"><?= $bj["name"]; ?></td>
                <td class="text-center"><?= $bj["size"]; ?></td>
                <td class="text-center"><?= $bj["brand"]; ?></td>
                <td class="text-center"><button class="button warning outline rounded"><?= $bj["price"]; ?></button></td>
                <td class="text-center"><?= $bj["category"]; ?></td>  
                <td class="text-center"><button class="button dark outline rounded"><a href="../latihan5d/php/detail.php?id=<?= $bj["id"] ?>">Details</a></button></th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

    <!-- Metro 4 -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>
    