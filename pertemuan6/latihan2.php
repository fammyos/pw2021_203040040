<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 6 (12 Maret 2021)
    Materi Minggu Ini Mereview Materi Pertemuan 5 Array dan
    Mempelajari Tentang Array Associative
*/ 
?>

<?php 
    // $mahasiswa = [
    //     ["Mariah Austrina Ocktavia", "203040040", "mariahaustrina@gmail.com", "Teknik Informatika"],
    //     ["Janis Aneira", "203040041", "janisaneira@gmail.com", "Teknik Pangan"],
    //     ["Diva Arsyanda", "203040042", "divarsn@gmail.com", "Akuntansi"]
    // ] ;

    // Array Associative
    // definisinya sama seperti array numerik, kecuali
    // key- nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
            "nrp" => "203040040",
            "nama" => "Mariah Austrina Ocktavia", 
            "email" => "mariahaustrina@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "mariahaustrina.jpg"
        ], 
        [
            "nama" => "Janis Aneira", 
            "nrp" => "203040041",
            "email" => "janisaneira@gmail.com",
            "jurusan" => "Teknik Pangan",
            "gambar" => "janisaneira.jpg"
        ]
    ] ;

    // Cara mencetaknya -- Sesuai urutan keynya dari yang terluar
    // echo $mahasiswa[1]["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiwa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"] ; ?>" alt=""></li>
        <li>Nama : <?= $mhs["nama"] ; ?></li>
        <li>NRP : <?= $mhs["nrp"] ; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ; ?></li>
        <li>Email : <?= $mhs["email"] ; ?></li>
    </ul>
    <?php endforeach ;  ?>
</body>
</html>