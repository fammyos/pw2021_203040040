<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 7 (19 Maret 2021)
    Materi Minggu Ini Mempelajari tentang GET & POST
*/ 
?>

<!-- <?php 
    // Variable Scope / Lingkup Variable
    $i = 15; // Variable ini hanya bisa digunakan didalam file latihan1.php ini

    function tampilI() {
        // variable $i = 15 ; tidak bisa dipanggil secara langsung pada function ini
        $x = 200 ; // variable ini merupakan variable lokal yg hanya bisa dipanggil dalam function tampilI() ini ;

        // untuk mengambil atau memanggil variable $i = 15; yg berada diluar function ini bisa dengan cara :
        global $i ;
    }

    tampilI() ;
?> -->

<!-- <?php 
    // Variable Superglobal PHP
    // merupakan Array Associative
    // 1. $_GET
    // 2. $_POST
    // 3. $_REQUEST
    // 4. $_SESSION
    // 5. $_COOKIE
    // 6. $_SERVER 
    // 7. $_ENV
    // Semua variabel superglobals adalah array associative

    // GET
    // Cara memasukan data kedalam variabel get seperti array associative
    $_GET["nama"] = "Fammy Oktariva S" ;
    var_dump($_GET);

    // cara memasukan data kedalam variabel get cara lain -- didalam url -- ditangkap oleh variabel get
    // http://localhost/pw2021_203040040/pertemuan7/latihan1.php
    // http://localhost/pw2021_203040040/pertemuan7/latihan1.php?nrp=203040040
    // nrp adalah key, dan 203040066 adalah value   

    // memasukkan 2 data sekaligus kedalam variabel get didalam url
    // tambahkan & diujung value terakhir, dan isi seperti sebelumnya
    // http://localhost/pw2021_203040066/pertemuan7/latihan1.php?nrp=203040040&instagram=fammyos
?> -->

<?php 
    // test get
    $mahasiswa = [
        [
            "nama" => "Mariah Austrina Ocktavia",
            "nrp" => "203040040", 
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"] ;?>&nrp=<?= $mhs["nrp"] ;?>&email=<?= $mhs["email"] ; ?>&jurusan=<?= $mhs["jurusan"] ; ?>&gambar=<?= $mhs["gambar"] ; ?>"><?= $mhs["nama"] ; ?></a>
            </li>
        <?php endforeach ; ?>
    </ul>

</body>
</html>