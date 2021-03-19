<?php 
/*
    Fammy Oktariva Setiadi
    203040040
    https://github.com/fammyos/pw2021_203040040
    Pertemuan 7 (19 Maret 2021)
    Materi Minggu Ini Mempelajari tentang GET & POST
*/ 
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

    <?php if( isset($_POST["submit"]) ): ?>
    <h1>Good Morning, <?= $_POST["nama"] ?></h1>
    <?php endif ; ?>

    <form action="" method="post">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Send</button>
    </form>

</body>
</html>