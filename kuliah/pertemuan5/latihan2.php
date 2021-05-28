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
    // pengulangan pada array
    // bisa menggunakan for atau foreach
    $angka = [2, 4, 6, 8, 10];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: #FFC35E;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
        color: #8a1fe5;
    }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

    <?php for( $i = 0; $i < count($angka); $i++ )  { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

        <div class="clear"></div>

    <?php foreach( $angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

        <div class="clear"></div>

    <?php foreach( $angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>

</body>
</html>