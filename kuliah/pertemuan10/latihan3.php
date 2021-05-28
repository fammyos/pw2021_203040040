<?php
require 'functions.php' ;
// tampung ke variabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href=" style.css">
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php">Tambah Data</a>
  <br><br>

  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?=$i; ?></td>
          <td><img src="img/<?=$mhs["img"]; ?>"></td>
          <td><?=$mhs["nama"]; ?></td>
        <td>
          <a href="detail.php?id=<?= $mhs["id"]; ?>"><button>Detail</button></a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>