<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 6 (12 Maret 2021)
    Materi Minggu Ini Mereview Materi Pertemuan 5 Array dan
    Mempelajari Tentang Array Associative
    Tugas Pertemuan 6 (Membuat Data Menggunakan Array Associative)
*/ 
?>

<?php 
    $motor = [
        [
            "brand" => "Kawasaki",
            "jenis" => "ZX-6R",
            "transmisi" => "Manual",
            "tahun" => "2020",
            "gambar" => "zx6r.jpg"
        ],

        [
            "brand" => "Honda",
            "jenis" => "CBR-600RR",
            "transmisi" => "Manual",
            "tahun" => "2018",
            "gambar" => "cbr600rr.jpg"
        ],

        [
            "brand" => "Yamaha",
            "jenis" => "R6",
            "transmisi" => "Manual",
            "tahun" => "2020",
            "gambar" => "r6.jpg"
        ],

        [
            "brand" => "Ducati",
            "jenis" => "Panigale V4",
            "transmisi" => "Manual",
            "tahun" => "2020",
            "gambar" => "panigale.jpg"
        ],

        [
            "brand" => "MV",
            "jenis" => "Agusta",
            "transmisi" => "Manual",
            "tahun" => "2014",
            "gambar" => "mvagusta.jpg"
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Motor</title>
</head>
<body>
    
    <h1>Daftar Motor</h1>

    <?php foreach( $motor as $mtr ) : ?>
    <ul>
        <li><img src="img/<?= $mtr["gambar"]?>" alt=""></li>
        <li>Brand : <?= $mtr["brand"] ; ?></li>
        <li>Jenis : <?= $mtr["jenis"] ; ?></li>
        <li>Transmisi : <?= $mtr["transmisi"] ; ?></li>
        <li>Tahun Keluaran : <?= $mtr["tahun"] ; ?></li>
    </ul>
    <?php endforeach ;  ?>

</body>
</html>