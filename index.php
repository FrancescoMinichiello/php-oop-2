<?php
include_once __DIR__ . "/models/Category.php";
include_once __DIR__ . "/models/Product.php";
$cani = new Category("cani");
$gatti = new Category("gatti");


$products = [
    new Product(
        "Palla morbida",
        3.99,
        "https://cdn.icon-icons.com/icons2/2242/PNG/512/perro_icon_134885.png",
        "https://www.lelepetshop.it/images/thumbs/0002949_gioco-cane-palla-tennis-gigante-maxi-15-cm-diametro_550.png",
        "Giochi per cani",
        $cani
    ),
    new Product(
        "Cuccia per gatto",
        29.99,
        "https://images.freeimages.com/vhq/images/previews/bdc/cat-icons-4-43748.png",
        "https://croci.net/cdn/shop/files/Cuccia_morbida_per_gatto_Bobby_Poilu.jpg?v=1709817054&width=850",
        "Cuccia per gatto",
        $gatti
    ),
    new Product(
        "Cuccia per gatto",
        29.99,
        "https://images.freeimages.com/vhq/images/previews/bdc/cat-icons-4-43748.png",
        "https://croci.net/cdn/shop/files/Cuccia_morbida_per_gatto_Bobby_Poilu.jpg?v=1709817054&width=850",
        "Cuccia per gatto",
        $gatti
    ),
];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-4 d-flex justify-content-center">
                <div class="card mt-5 text-center p-3" style="width: 18rem;">
                    <img class="img-fluid icon-img" src="<?= $product->icon ?>" alt="Product image">
                    <img class="card-img-top" src="<?= $product->image ?>" alt="Product image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->title ?></h5>
                        <p class="card-text">Categoria: <?= $product->category->name ?></p>
                        <p class="card-text">Prezzo: <?= $product->price ?>€</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $product->type ?></li>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>