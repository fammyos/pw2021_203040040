<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
    $footballer = [
        "Barcelona"=>"Lionel Messi",
        "Liverpool"=>"Mohammad Salah",
        "Paris Saint Germain"=>"Neymar Jr",
        "Juventus"=>"Cristiano Ronaldo",
        "Liverpool"=>"Sadio Mane",
        "Ac Milan"=>"Zlatan Ibrahimovic",
        "Real Madrid"=>"Luka Modric"
        
    ];
    //Fungsi asort() mengurutkan elemen array associative dalam urutan naik sesuai dengan nilainya.
    asort($footballer);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3C</title>
</head>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    table tr td b {
        padding-right: 20px;
    }

    table tr td {
        padding-bottom: 10px;
    }

    h3 {
        font-size: 20px;
    }
</style>
<body>
    <h3>Daftar pemain bola terkenal dan clubnya</h3>
    <table border="1" cellspacing="0" cellpadding="10">
            <?php foreach ($footballer as $club => $pemain) : ?>
                <tr>
                    <td><b><?= $pemain; ?></b></td>
                    <td>:</td>
                    <td><?= $club; ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>