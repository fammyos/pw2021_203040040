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
    // array
    // variabel yang dapat memiliki banyak nilai
    // elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan antara key dan value
    // key-nya adalah index, yang dimulai dari 0

    // membuat array menggunakan cara lama
    $hari = array("Senin", "Selasa", "Rabu");

    // membuat array menggunakan cara baru
    $bulan = ["Januari", "Februari", "Maret"];

    // contoh array dengan beda tipe
    $arr1 = [123, "Tulisan", false];

    // cara menampilkan array
    // bisa menggunakan var_dump() atau print_r()

    // var_dump()
    // var_dump($hari);

    // // print_r()
    // echo "<br>";
    // print_r($bulan);

    // // menampilkan 1 elemen pada array 
    // echo "<br>";
    // echo $arr1[0];

    // echo "<br>";
    // echo $bulan[1];

    // menambahkan elemen baru pada array ketika pada saat ditengah tengah pengerjaan
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jum'at";

    echo"<br>";
    var_dump($hari);
    
?>
