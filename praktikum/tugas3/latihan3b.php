<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
    $footballer = [
        "Mohammad Salah",
        "Cristiano Ronaldo",
        "Lionel Messi",
        "Zlatan Ibrahimovic",
        "Neymar Jr"
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3B</title>
</head>
<body>
    <h3>Daftar pemain bola terkenal</h3>
    <ol>
        <?php foreach($footballer as $pemain) : ?>
            <li><?= $pemain ?></li>
        <?php endforeach; ?>
    </ol>

    <?php
    // Menambahkan elemen baru pada array sebelumnya
    array_push($footballer,"Luca Modric","Sadio Mane");
    
    // Mengurutkan Secara Abdjad
    sort($footballer);
    ?>

    <h3>Daftar pemain bola terkenal baru</h3>
    <ol>
        <?php foreach($footballer as $new) : ?>
            <li><?= $new ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>