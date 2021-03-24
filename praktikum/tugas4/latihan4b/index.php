<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
    // menghubungkan dengan file php lainnya
    require 'php/funtions.php' ;

    // melakukan query dengan memanggil functionnya
    $row = query("SELECT * FROM baju") ;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <title>Bade Project</title>
    
  </head>
  <body>
  <div class="container mt-5 mb-5">
  <h2 class="text-center pt-5 pb-5">Bade<i>Project</i></h2>
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
    </tr>
    </thead>
    <tbody>
        <?php foreach($row as $rw) : ?>
            <tr>
                <td class="text-center"><?= $rw["id"]; ?></td>
                <td class="text-center"><img src="../latihan4b/assets/img/<?= $rw["img"]; ?>" alt=""></td>
                <td class="text-center"><?= $rw["name"]; ?></td>
                <td class="text-center"><?= $rw["size"]; ?></td>
                <td class="text-center"><?= $rw["brand"]; ?></td>
                <td class="text-center"><button class="button warning outline rounded"><?= $rw["price"]; ?></button></td>
                <td class="text-center"><?= $rw["category"]; ?></td>  
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

    <!-- Metro 4 -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>
    