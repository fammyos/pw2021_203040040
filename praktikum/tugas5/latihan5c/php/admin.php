<?php 
// menghubungkan dengan file php lainnya
require 'functions.php' ;

// melakukan query
$baju = query("SELECT * FROM baju") ;
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
  <button class="button is-success"><a href="../php/tambah.php">Tambah</a></button>
  <br><br>
  <table class="table table-border cell-border">
    <thead>
    <tr>
        <th>No</th>
        <th class="text-center">Option</th>
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
                <td class="text-center">
                <a href="" class="button dark rounded outline mr-2">Ubah</a>
                <a href="../php/delete.php?id=<?= $bj["id"]; ?>" class="button dark rounded outline ml-2">Hapus</a>
                </td>
                <td class="text-center"><img src="../assets/img/<?= $bj["img"]; ?>" alt=""></td>
                <td class="text-center"><?= $bj["name"]; ?></td>
                <td class="text-center"><?= $bj["size"]; ?></td>
                <td class="text-center"><?= $bj["brand"]; ?></td>
                <td class="text-center"><button class="button warning outline rounded"><?= $bj["price"]; ?></button></td>
                <td class="text-center"><?= $bj["category"]; ?></td>  
                <td class="text-center"><button class="button dark outline rounded"><a href="../php/detail.php?id=<?= $bj["id"] ?>">Details</a></button></th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

    <!-- Metro 4 -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>