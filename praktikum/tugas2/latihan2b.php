<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
    $jawabanIsset = "Isset adalah = Function yang digunakan untuk memeriksa apakah variabel disetel dengan nilai atau tidak. <br><br>";
    $jawabanEmpty = "Empty adalah = Function yang digunakan untuk memeriksa apakah variabel yang diberikan kosong atau tidak.";

    function soal($style){
        return "<div class=\"$style\">" . $GLOBALS["jawabanIsset"] . $GLOBALS["jawabanEmpty"] . "</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2B</title>
    <style>
    .style{
        border: 1px solid black;
        box-shadow: 0 0 10px rgba(0, 0, 0, 30); 
        padding: 10px;
        font-size: 20px;
        width: fit-content;
        background-color: burlywood;
        color: #8a1fe5;
    }
    </style>
</head>
<body>
    <?php echo soal("style"); ?>
    
</body>
</html>