<!-- <h1>PRODUK</h1> -->
<!DOCTYPE html>
<html>
<head>
    <title>PRODUK</title>
    <style>
        .product {
            float: left;
            margin: 20px;
            text-align: center;
        }
        .product img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <h1 align="center">Produk</h1>

<?php
// Data produk dalam array
$products = array(
    array(
        "name" => "AC",
        "description" => "AC DAIKIN",
        "image" => "gambar/ac.jpg"
    ),
    array(
        "name" => "Kulkas",
        "description" => "Kulkas Toshiba",
        "image" => "gambar/kulkas.jpg"
    ),
    array(
        "name" => "TV",
        "description" => "TV Polytron",
        "image" => "gambar/tv.jpg"
    ),
    array(
        "name" => "Flashdisk",
        "description" => "Flashdisk SanDisk",
        "image" => "gambar/flashdisk.jpg"
    ),
    array(
        "name" => "Camera",
        "description" => "Camera Canon",
        "image" => "gambar/camera.jpg"
    ),
    array(
        "name" => "PRINTER",
        "description" => "EPSON",
        "image" => "gambar/printer.jpg"
    )
);

// Output data setiap produk
foreach ($products as $product) {
    echo '<div class="product">';
    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
    echo '<h2>' . $product['name'] . '</h2>';
    echo '<p>' . $product['description'] . '</p>';
    echo '</div>';
}
?>


</body>
</html>
