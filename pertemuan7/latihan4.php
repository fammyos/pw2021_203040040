<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 7 (19 Maret 2021)
    Materi Minggu Ini Mempelajari tentang GET & POST
*/ 
?>

<?php 
    if(!isset($_POST["nama"])){
        header("Location: latihan3.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    
    <h1>Welcome, <?= $_POST["nama"] ?></h1>

</body>
</html>