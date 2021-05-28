<?php 
    require 'functions.php' ;

    // ambil id dari URL
    $id = $_GET["id"] ;

    // query mahasiswa berdasarkan id
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id") ;
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
    <h3>Detail Mahasiswa</h3>

    <ul>
        <li><img src="img/<?= $mahasiswa["img"] ; ?>" alt=""></li>
        <li>NRP : <?= $mahasiswa["nrp"] ; ?></li>
        <li>Nama : <?= $mahasiswa["nama"] ; ?></li>
        <li>Email : <?= $mahasiswa["email"] ; ?></li>
        <li>Jurusan : <?= $mahasiswa["jurusan"] ; ?></li>
        <li>
        <a href="ubah.php?id=<?= $mahasiswa['id']; ?>"><button>Ubah</button></a>
        <a href="hapus.php?id=<?= $mahasiswa['id']; ?>" onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data?') ; "><button>Hapus</button></a>
        </li>
        <li><a href="index.php"><button>Kembali</button></a></li>
    </ul>

</body>
</html>