<?php
include_once __DIR__ . "/models/Category.php";
include_once __DIR__ . "/models/Product.php";
include_once __DIR__ . "/models/db.php";

$cani = new Category("Cani");
$gatti = new Category("Gatti");

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
        <div class="row ">
            <?php foreach ($products as $product) { ?>
            <div class="col-3">
                <div class="card my-5 text-center p-3" style="width: 18rem;">
                    <img class="img-fluid icon-img" src="<?= $product->icon ?>" alt="Icon image">
                    <img class="card-img-top p-4 " src="<?= $product->image ?>" alt="Product image">
                    <div class="card-body bg-secondary rounded-2 text-white mb-2">
                        <h5 class="card-title"><?= $product->title ?></h5>
                        <p class="card-text">Categoria: <?= $product->category->getName() ?></p>
                        <p class="card-text fw-bold">Prezzo: <?= $product->price ?>€</p>
                    </div>
                    <ul class="list-group list-group-flush pt-2">
                        <li class="list-group-item bg-success rounded-2 fw-semibold text-white"><?= $product->type ?>
                        </li>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>