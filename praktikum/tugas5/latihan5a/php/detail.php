<?php 
    // Mengecek apakah ada id yang dikirimkan dari index.php
    // Jika tidak ada makan akan di redirect ke halaman index.php
    if(!isset($_GET["id"])){
        header("Location : ../index.php");
        exit;
    }

    require ('functions.php') ;

    // Mengambil id dari url
    $id = $_GET["id"];

    // Melakukan query dengan parameter id yang diambil dari url
    $baju = query ("SELECT * FROM baju WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?= $baju["name"];  ?></title>

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">
    
  </head>
  <body>
    <div class="container pt-15" style="width: 40%">
        <div class="card">
        <div class="card-header">
            <div class="name text-center mr-13"><?= $baju["name"] ; ?></div>
            <div class="date text-center mr-13"><?= $baju["brand"] ; ?></div>
        </div>
        <div class="card-content text-center">
            <img src ="../assets/img/<?= $baju["img"] ; ?>" style="width: 30%">
        </div>
        <div class="card-content fg-gray p-2 text-center">
            <br>
            <span>Size : <?= $baju["size"] ; ?></span> <br>
            <span>Category : <?= $baju["category"] ; ?></span> <br>
            <span>Price : <?= $baju["price"] ; ?></span>
        </div>
        <div class="card-footer">
            <button class="flat-button mif-thumbs-up mif-2x"></button>
            <button class="flat-button mif-shop mif-2x"></button>
            <button class="flat-button mif-share mif-2x"></button>
        </div>
        </div>

        <button class="button warning outline rounded ml-3 mt-3"><a href="../index.php">Back</a></button>
    </div>
</body>
</html>