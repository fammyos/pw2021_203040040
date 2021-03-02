<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 C</title>
    <style>
        .bulat {
            background-color: #131314;
            width: 70px;
            height: 70px;
            line-height: 70px;
            text-align: center;
            border: 3px solid #8a1fe5;
            color: #697477;
            display: inline-block;
            border-radius: 50px;
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    
    <?php for( $bulat1 = 1; $bulat1 <= 3; $bulat1++) : ?>
        <?php for( $bulat2 = 1; $bulat2 <= $bulat1; $bulat2++) : ?>
           <div class="bulat"><?= $bulat1 ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>

</body>
</html>