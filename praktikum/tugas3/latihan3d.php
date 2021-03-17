<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
$footballer = [
    [
        "nama"=>"Cristiano Ronaldo",
        "club"=>"Juventus",
        "main"=>100,
        "gol"=>76,
        "assist"=>30
    ],
    [
        "nama"=>"Lionel Messi",
        "club"=>"Barcelona",
        "main"=>120,
        "gol"=>80,
        "assist"=>12
    ],
    [
        "nama"=>"Luca Modric",
        "club"=>"Real Madrid",
        "main"=>87,
        "gol"=>12,
        "assist"=>48
    ],
    [
        "nama"=>"Mohammad Salah",
        "club"=>"Liverpool",
        "main"=>90,
        "gol"=>103,
        "assist"=>8
    ],
    [
        "nama"=>"Neymar Jr",
        "club"=>"Paris Saint Germain",
        "main"=>109,
        "gol"=>56,
        "assist"=>15
    ],
    [
        "nama"=>"Sadio Mane",
        "club"=>"Liverpool",
        "main"=>63,
        "gol"=>30,
        "assist"=>70
    ],
    [
        "nama"=>"Zlatan Ibrahimovic",
        "club"=>"Ac Milan",
        "main"=>100,
        "gol"=>10,
        "assist"=>12
    ]
];

    $main = 0;
    $gol = 0;
    $assist = 0;

    for($i=0; $i < count($footballer); $i++) {
        $main += $footballer[$i]["main"];
        $gol += $footballer[$i]["gol"];
        $assist += $footballer[$i]["assist"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3D</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>

        <?php foreach ($footballer as $urutan => $pemain) : ?>
            <tr>
                <td><?= $urutan+1; ?></td>
                <td><?= $pemain["nama"]; ?></td>
                <td><?= $pemain["club"]; ?></td>
                <td><?= $pemain["main"]; ?></td>
                <td><?= $pemain["gol"]; ?></td>
                <td><?= $pemain["assist"]; ?></td>
            </tr>
        <?php endforeach; ?>
        
        <tr style="font-weight:bold">
            <td>#</td>
            <td colspan="2" style="text-align: center;">Jumlah</td>
            <td><?= $main; ?></td>
            <td><?= $gol; ?></td>
            <td><?= $assist; ?></td>
        </tr>
    </table>
</body>
</html>