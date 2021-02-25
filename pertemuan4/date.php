<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 4 (26 Februari 2021)
    Materi Minggu Ini Mempelajari Tentang Function pada PHP
    (Built-in Function dan User-defined Function)
*/ 
?>

<?php 
    // date
    // Untuk menampilkan tanggal dengan format tertentu 
    // Contoh :
    // echo date("l, d-M-Y");

    // time
    // Untuk menampilkan waktu dengan format tertentu
    // UNIX TimeStamp / EPOCH Time
    // 1613059338 => merupakan detik yang sudah berlalu sejak 1 Januari 1970
    // Contoh :
    // echo time();

    // Jika menggunakan keduanya 
    // Contoh : 
    // echo date("l", time()+60*60*24*100);
    // echo date("l, d M Y", time()-60*60*24*100);

    // mktime
    // Membuat detik sendiri yang sudah berlalu
    // Mempunyai parameter sebanyak 6 dengan urutan (jam, menit, detik, bulan, tanggal, tahun)
    // mktime(0, 0, 0, 0, 0, 0)
    // Contoh :
    // echo date("l", mktime(0, 0, 0, 10, 19, 2002));

    // strtotime
    // Input dengan format tanggal kemudian hasilnya detik
    // Contoh :
    // echo date("l", strtotime("19 oct 2002"));
?>

<!-- Latihan membuat Built-in Function -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
    <style>
        h1 {
            font-family: "gotham";
            text-align: center;
            padding: 20px;
        }

        p {
            text-align: center;
            color: grey;
        }

        h1, p {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Fammy Oktariva Setiadi</h1>
    <p>I was born on <?php echo date("l, F d Y", mktime(0, 0, 0, 10, 19, 2002)); ?> to be precise in Bandung.</p>
    <p>and now I am 18 years old.</p>
</body>
</html>