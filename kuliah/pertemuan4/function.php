<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 4 (26 Februari 2021)
    Materi Minggu Ini Mempelajari Tentang Function pada PHP
    (Built-in Function and User-defined Funciton)
*/ 
?>

<?php 
    // User-defined Function
    // Cara membuat Function, Cara memanggil Function, dan Cara mengisikan parameter atau argument
?>

<!-- Latihan membuat User-defined Function -->
<?php 
    function salam($waktu = "Afternoon", $nama = "Admin!") {
        return "$waktu, $nama!";
    }

    function quest($kabar = "How Are You", $kapan = "Today?") {
        return "$kabar, $kapan?";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
    <style>
        .tulisan {
            text-align: center;
            padding: 20px;
            font-family: "gotham";
        }

        .tulisan2 {
            text-align: center;
            padding: 5px;
            color: grey;
            font-family: "gotham";
        }
    </style>
</head>
<body>
    <h1 class="tulisan"><?= salam("Good Morning", "Fammy"); ?></h1>
    <p class="tulisan2"><?= quest("How You're Feeling", "Now"); ?></p>
</body>
</html>