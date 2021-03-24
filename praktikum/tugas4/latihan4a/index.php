<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
    // koneksi ke database
    $connect = mysqli_connect("localhost", "root", "") ;

    // memilih database
    mysqli_select_db($connect, "pw_tubes_203040040") ;

    // melakukan query dari database
    $hasil = mysqli_query($connect, "SELECT * FROM baju") ;
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
        <?php while( $row = mysqli_fetch_assoc($hasil) ) : ?>
            <tr>
                <td class="text-center"><?= $row["id"]; ?></td>
                <td class="text-center"><img src="../latihan4a/assets/img/<?= $row["img"]; ?>" alt=""></td>
                <td class="text-center"><?= $row["name"]; ?></td>
                <td class="text-center"><?= $row["size"]; ?></td>
                <td class="text-center"><?= $row["brand"]; ?></td>
                <td class="text-center"><button class="button warning outline rounded"><?= $row["price"]; ?></button></td>
                <td class="text-center"><?= $row["category"]; ?></td>  
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</div>

    <!-- Metro 4 -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>
    