<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 7 (19 Maret 2021)
    Materi Minggu Ini Mempelajari tentang GET & POST
*/ 
?>

<?php 
    // cek apakah tidak ada data di $_GET
    if( !isset($_GET["nama"]) || 
        !isset($_GET["nrp"]) ||
        !isset($_GET["email"]) ||
        !isset($_GET["jurusan"]) ||
        !isset($_GET["gambar"])) {
        // redirect
        header("Location: latihan1.php") ;
        exit ;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    
    <ul>
        <li><img src="../pertemuan6/img/<?= $_GET["gambar"] ; ?>" alt=""></li>
        <li><?= $_GET["nama"] ; ?></li>
        <li><?= $_GET["nrp"] ; ?></li>
        <li><?= $_GET["email"] ; ?></li>
        <li><?= $_GET["jurusan"] ; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>

</body>
</html>