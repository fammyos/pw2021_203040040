<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>

</head>
<body>

<table width="250px" cellspacing="5px" border="1px">
<?php for( $baris = 1; $baris <= 6; $baris++ ) : ?>
    <tr>
        <?php for( $kolom = 1; $kolom <= 6; $kolom++ ) : ?>
            <?php $keduanya = $baris + $kolom; ?>
            <?php if( $keduanya % 2 == 1 ) : ?>
                <td height = 30px width = 30px bgcolor = salmon></td>
            <?php else : ?>
                <td height = 30px width = 30px bgcolor = lightblue></td>
            <?php endif; ?>
        <?php endfor; ?> 
    </tr>
<?php endfor; ?>
</table>