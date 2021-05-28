<?php 
  session_start();

  if (!isset($_SESSION['login'])) {
      header("Location: ../php/login.php");
      exit;
  }

    // Mengecek apakah ada id yang dikirimkan dari index.php
    // Jika tidak ada makan akan di redirect ke halaman index.php
    if(!isset($_GET["id"])){
        header("Location : ../php/admin.php");
        exit;
    }

    require ('functions.php') ;

    // Mengambil id dari url
    $id = $_GET["id"];

    // Melakukan query dengan parameter id yang diambil dari url
    $baju = query ("SELECT * FROM baju WHERE id = $id");
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
    
  </head>
  <body>
    <div class="container pt-15" style="width: 40%">
        <div class="card">
        <div class="card-header">
            <div class="name text-center mr-13"><?= $baju["name"] ; ?></div>
            <div class="date text-center mr-13"><?= $baju["brand"] ; ?></div>
        </div>
        <div class="card-content text-center mt-5">
            <img src ="../assets/img/<?= $baju["img"] ; ?>" style="width: 30%">
        </div>
        <div class="card-content fg-gray p-2 text-center">
            <br>
            <span>Size : <?= $baju["size"] ; ?></span> <br>
            <span>Category : <?= $baju["category"] ; ?></span> <br>
            <span>Price : <?= $baju["price"] ; ?></span>
        </div>
        <div class="card-footer fg-gray p-2 text-center">
            <span><?= $baju["info"] ; ?></span>
        </div>
        </div>
        <button class="button bg-gray-hover rounded ml-3 mt-3"><a href="../php/admin.php#main">Back</a></button>
    </div>
</body>
</html>