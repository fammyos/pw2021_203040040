<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 12 (7 Mei 2021)
    Materi Minggu Ini Mempelajari tentang Login
*/ 
?>

<?php
  session_start() ;

  if(!isset($_SESSION['login'])) {
    header("Location: login.php") ;
  }

  require 'functions.php' ;
  // tampung ke variabel mahasiswa
  $mahasiswa = query("SELECT * FROM mahasiswa");

  // ketika tombol cari di klik
  if(isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']) ;
  }
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
  <a href="logout.php">Logout</a>
  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php">Tambah Data</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="Find People.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Search</button>
  </form>
  <br>

  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if(empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
      <p style="color: red ; font-style: italic">Data Mahasiswa Tidak Ditemukan!</p>
      </td>
    </tr>
    <?php endif ; ?>

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