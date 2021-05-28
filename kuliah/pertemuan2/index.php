<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 2 (12 Februari 2021)
    Materi Minggu Ini Mempelajari Tentang Cara Penulisan Sintaks PHP Dasar, Variabel 
    dan Penggunaan dari beberapa Operator seperti(Aritmatika, Concatenation(Penggabung String), 
    Assigment(Penugasan), Perbandingan, Identitas dan Logika). 
*/ 
?>
    
<?php
    // Standar Output
    // echo, print
    // print_r = Bisa Mencetak String dan Array
    // print_r("Fammy Oktariva Setiadi");
    // var_dump = Memberikan Informasi Tidak Hanya Apa Yang Ditampilkannya Saja Melainkan Dengan Tipe Data dan Ukurannya
    // var_dump("Fammy Oktariva Setiadi");

    // Penulisan Sintaks PHP
    // 1. PHP dalam HTML
    // 2. HTML dalam PHP
    
    // Variabel dan Tipe Data
    // Tidak Boleh Diawali Dengan Angka, Tapi Boleh Mengandung Angka
    // Contoh Membuat Variabel Nama
    // $nama = "Fammy Oktariva S";
    
    // Operator Aritmatika
    // +, -, *, /, % 
    // Contoh Pengoperasian
    // echo 1 + 1;
    // Atau Juga Bisa Menggunakan Variabel
    // $x = 20;
    // $y = 10;
    // echo $x * $y;

    // Operator Penggabung String / Concatenation / Concat
    // .
    // Contoh Penggunaan Menggunakan Variabel
    // $nama_awal = "Fammy";
    // $nama_tengah = "Oktariva";
    // $nama_akhir = "Setiadi";
    // echo $nama_awal . " " . $nama_tengah . " " . $nama_akhir;

    // Operator Assigment
    // =, +=, -=, *=, /=, %=, .=
    // Contoh Penggunaan
    // $x = 2;
    // $x *= 5;
    // echo $x; 
    // Atau Bisa Juga
    // $nama = "Fammy";
    // $nama .= " ";
    // $nama .= "Setiadi";
    // echo $nama;

    // Operator Perbandingan
    // Tidak Mengecek Tipe Datanya Hanya Nilainya Saja
    // <, >, <=, >=, ==, !=
    // Contoh Penggunaan
    // var_dump(1 <= 5);

    // Operator Identitas
    // Untuk Mengecek Identitas Sebuah Nilai
    // ===, !==
    // Contoh Penggunaan
    // var_dump(1 === "1");

    // Operator Logika
    // Dipakai Untuk Pengkondisian
    // &&, ||, !
    // $x = 50;
    // var_dump($x > 100 || $x %2 == 0);
?>

<?php
    // Latihan Membuat Website Sederhana Menggunakan Sintaks PHP
    // Variabel Nama
    $nama = "Fammy";
    $nama .= " ";
    $nama .= "Oktariva";
    $nama .= " ";
    $nama .= "Setiadi";

    // Variabel Angka
    $x = 2020;
    $y = 10;
    $z = 9;
    $o = 2002;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
    <style>
        h1 {
            font-family: "gotham";
            text-align: center;
        }

        p {
            font-family: "gotham";
            text-align: center;
            color: grey;
        }

        h1, p {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Hallo, Saya <?php echo $nama; ?></h1>
    <p>Merupakan Mahasiswa IF dari Universitas Pasundan Angkatan <?php echo $x; ?></p>
    <p>Lahir di Bandung Pada <?php echo $y + $z; ?> Oktober <?php echo $o; ?></p>
</body>
</html>