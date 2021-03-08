<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
    function tumpukanBola($tumpukan){
        for($i = 1; $i <= $tumpukan; $i++){
            for ($j=1; $j <= $i; $j++){
                echo "<div class=\"bola\">$i</div>";
            }
        echo "<br>";
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2C</title>
    <style>
    .bola{
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
    <?php tumpukanBola(5); ?>
</body>
</html>