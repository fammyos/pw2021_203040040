<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
    function gantiStyle($tulisan, $style1, $style2){ 
        return "<div class=\"$style1 $style2\">$tulisan</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2A </title>
    <style>
    .style1{
        font: italic bolder 28px Arial;
        color: #8c782d;
    }
    .style2{
        border: 1px solid black;
        box-shadow: 0 0 10px rgba(0, 0, 0, 30);
        padding: 10px;
        width: fit-content;
    }
    </style>
</head>
<body>
    <?php echo gantiStyle("Selamat datang di praktikum pw", "style1", "style2") ?>
</body>
</html>