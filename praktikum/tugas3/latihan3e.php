<?php 
    // NRP : 203040040
    // Nama : Fammy Oktariva Setiadi
    // Shift Praktikum : Jum'at Pukul 10.00
?>

<?php 
$item = [
    [
        "numer" => "1",
        "foto"  =>  "Taupe-Mickey.jpg",
        "name"  =>  "Taupe/Mickey Mouse",
        "size"  =>  "L",
        "brand" =>  "H&M",
        "price" =>  "$34.99",
        "category"  =>  "Men/Hoodie",
    ],
    [
        "numer" => "2",
        "foto"  =>  "Pink-Mickey.jpg",
        "name"  =>  "Light pink/Mickey Mouse",
        "size"  =>  "S",
        "brand" =>  "H&M",
        "price" =>  "$19.99",
        "category"  =>  "Women/Hoodie",
    ],
    [
        "numer" => "3",
        "foto"  =>  "Star-Wars.jpg",
        "name"  =>  "Natural white/Star Wars",
        "size"  =>  "L",
        "brand" =>  "H&M",
        "price" =>  "$20.99",
        "category"  =>  "Men/Hoodie",
    ],
    [
        "numer" => "4",
        "foto"  =>  "Light-Beige.jpg",
        "name"  =>  "Light Beige/NASA",
        "size"  =>  "M",
        "brand" =>  "H&M",
        "price" =>  "$21.99",
        "category"  =>  "Men/Hoodie",
    ],
    [
        "numer" => "5",
        "foto"  =>  "Flannel-Navy.jpg",
        "name"  =>  "Flannel Soft Twill Navy",
        "size"  =>  "L",
        "brand" =>  "UNIQLO",
        "price" =>  "$34.99",
        "category"  =>  "Men/Flannel",
    ],
    [
        "numer" => "6",
        "foto"  =>  "Flannel-Beige.jpg",
        "name"  =>  "Flannel Soft Twill Beige",
        "size"  =>  "L",
        "brand" =>  "UNIQLO",
        "price" =>  "$34.99",
        "category"  =>  "Men/Flannel",
    ],
    [
        "numer" => "7",
        "foto"  =>  "White2.jpg",
        "name"  =>  "Short-sleeved Poplin Shirt",
        "size"  =>  "M",
        "brand" =>  "H&M",
        "price" =>  "$17.99",
        "category"  =>  "Women/Shirts",
    ],
    [
        "numer" => "8",
        "foto"  =>  "White1.jpg",
        "name"  =>  "Relaxed Fit T-shirt",
        "size"  =>  "L",
        "brand" =>  "H&M",
        "price" =>  "$12.99",
        "category"  =>  "Men/T-shirts",
    ],
    [
        "numer" => "9",
        "foto"  =>  "Cashmere-Sweater.jpg",
        "name"  =>  "Cashmere Sweater",
        "size"  =>  "S",
        "brand" =>  "ZARA",
        "price" =>  "$50.99",
        "category"  =>  "Women/Sweater",
    ],
    [
        "numer" => "10",
        "foto"  =>  "Wool-Blend-Knit-Sweater.jpg",
        "name"  =>  "Wool Blend Knit Sweater",
        "size"  =>  "M",
        "brand" =>  "ZARA",
        "price" =>  "$49.99",
        "category"  =>  "Women/Sweater",
    ],
];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Clothing Store</title>
  </head>
  <body>
    
    <div class="container bg-warning bg-gradient mt-5 mb-5">
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Picture</th>
            <th scope="col">Name</th>
            <th scope="col">Size</th>
            <th scope="col">Brand</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            </tr>
        </thead>
            <tbody>
                <?php foreach( $item as $itm ) : ?>
                    <tr>
                        <td><?= $itm["numer"]; ?></td>
                        <td><img src="img/<?= $itm["foto"]; ?>" alt=""></td>
                        <td><?= $itm["name"]; ?></td>
                        <td><?= $itm["size"]; ?></td>
                        <td><i><?= $itm["brand"]; ?></i></td>
                        <td class="badge bg-primary text-wrap" style="width: 4rem;"><?= $itm["price"]; ?></td>
                        <td><?= $itm["category"]; ?></td>
                    </tr>
                <?php endforeach ; ?>
                </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
