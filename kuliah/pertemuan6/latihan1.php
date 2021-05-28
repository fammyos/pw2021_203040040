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

<!-- <?php 
    // review array
    // membuat array
    $hari = array("Senin", "Selasa", "Rabu") ;
    $bulan = ["Januari", "Februari", "Maret"] ;
    $arr = [100, "Teks", true] ;
    // menampilkan array
    // versi debugging (Programmer/Developer)
    var_dump($hari) ;
    echo "<br>" ;
    print_r($bulan) ;
    // menampilkan 1 elemen pada array
    echo $arr[0] ;
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: salmon;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

    <!-- <?php 
        $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]] ;
    ?>

    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?= $a ; ?></div>
    <?php endforeach ;  ?> -->
    

    <!-- mencetak isi array multi dimensi -->
    <!-- <?php 
        $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]] ;
        echo $angka[2][2] ;
    ?> -->

    <?php foreach( $angka as $a ) : ?>
        <?php foreach( $a as $b) : ?>
            <div class="kotak"><?= $b ; ?></div>
        <?php endforeach ; ?>
        <div class="clear"></div>
    <?php endforeach ;  ?>
    
</body>
</html>