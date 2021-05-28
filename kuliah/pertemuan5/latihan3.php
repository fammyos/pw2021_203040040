<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 5 (5 Maret 2021)
    Materi Minggu Ini Mempelajari Tentang Array
    (Array, Array Numerik, Array MultiDimensi dll)
*/ 
?>

<?php 
    // menggunakan array numerik
    // array yang index nya angka 
    $mahasiswa = [
        ["Mariah Austrina Ocktavia", "203040016", "Teknik Pangan", "mariahaustrina@gmail.com"],
        ["Fammy Oktariva Setiadi", "203040040", "Teknik Informatika", "fammyoktrva@gmail.com"],
        ["Janis Aneira", "203020075", "Akuntansi", "janisaneira@gmail.com"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: "gotham";
            background-color: #131314;
            color: #8a1fe5;
        }

        h1 {
            color: #FFC35E;
        }

        .nrp {
            color: #697477;
        }

        .email {
            color: #697477;
        }
    </style>

</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <!-- menggunakan looping -->
    <!-- <ul>
        <?php foreach( $mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach ;  ?>
    </ul> -->

    <!-- menggunakan cara manual -->
    <!-- <ul>
        <li><?= $mahasiswa[0]; ?></li>
        <li><?= $mahasiswa[1]; ?></li>
        <li><?= $mahasiswa[2]; ?></li>
        <li><?= $mahasiswa[3]; ?></li>
    </ul> -->

    <!-- menggunakan array multidimensi -->
    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li class="nrp">NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li class="email">Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>