<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 3 (19 Februari 2021)
    Materi Minggu Ini Mempelajari Tentang Pengulangan dan Pengkondisian pada PHP
*/ 
?>

<?php 
    // Pengulangan 
    // for : ada 3 bagian yaitu (Inisialisasi, Kondisi Terminasi, Incerment atau Dekerment)
    // Inisialisasi : menentukan variabel awal untuk pengulangannya
    // Kondisi Terminasi : memberhentikan pengulangannya
    // inkermen atau dekermen : agar pengulangan tersebut dapat maju atau mundur
    // Contoh 
    // for( $i = 0; $i < 5; $i++ ) {
    //     echo "Hello World! <br>";
    // }

    // while
    // Contoh 
    // $i = 0;
    // while ( $i < 5 ) {
    //     echo "Hello, World! <br>";
    // $i++;
    // }

    // do.. while
    // Contoh 
    // $i = 0;
    // do {
    //     echo "Hello, World! <br>";
    //     $i++;
    // } while ($i < 5);

    // foreach : pengulangan khusus array

    // Pengkondisian
    // if else if else
    // if else : mengecek apakah sebuah kondisi bernilai true atau false
    // Contoh
    // $x = 20;
    // if ( $x <20 ) {
    //     echo "Hello";
    // } else if ( $x == 20 ) {
    //     echo "Boom!";
    // } 
    // else {
    //     echo "Guys";
    // }

    // ternary : Mengganti if else yang sederhana
    // switch : Jika if else yang terlalu banyak bisa diringkas menggunakan ini



?>

<!-- Latihan Pengulangan dan Pengkondisian -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
    <style>
        .warna-baris{
            background-color: #FDF0C4;
            font-family: "gotham";
        } 
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 0 and $j % 3 == 0 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for ( $j = 1; $j <=5; $j++ ) : ?>
                    <td><?= "$i, $j";?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>    
    </table>
</body>
</html>