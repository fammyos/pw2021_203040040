<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
    function hitungDeterminan($a, $b, $c, $d){
        $hasil = ($a * $d) - ($b * $c) ;

        echo "<table style='border-left:3px solid black; border-right: 3px solid black; font-size:25px;' cellspacing='5' cellpadding='5'>
                <tr>
                    <td>$a</td>
                    <td>$b</td>
                </tr>
                <tr>
                    <td>$c</td>
                    <td>$d</td>
                </tr>
              </table> <br>";
        echo "<b> Determinan dari matriks tersebut adalah $hasil </b>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2D</title>
</head>
<body>
    <?php hitungDeterminan(2,4,6,8) ?>
</body>
</html>