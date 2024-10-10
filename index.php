<?php
include_once __DIR__ . "/models/Category.php";
include_once __DIR__ . "/models/Product.php";

$cani = new Category("Cani");
$gatti = new Category("Gatti");


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
        "Accessori per gatti",
        $gatti
    ),
    new Product(
        "Crocchette per cani",
        9.99,
        "https://cdn.icon-icons.com/icons2/2242/PNG/512/perro_icon_134885.png",
        "https://www.pacopetshop.it/16048-home_default/naxos-wellness-valle-bruna-mini-adult-per-cani.jpg",
        "Cibo per cani",
        $cani
    ),
    new Product(
        "Gioco per gatti",
        11.99,
        "https://images.freeimages.com/vhq/images/previews/bdc/cat-icons-4-43748.png",
        "https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw719c0a68/images_dmail/large/509459l_1.jpg",
        "Giochi per gatti",
        $gatti
    ),
    new Product(
        "Cibo umido con fegato",
        1.99,
        "https://images.freeimages.com/vhq/images/previews/bdc/cat-icons-4-43748.png",
        "https://www.naturepetshop.it/wp-content/uploads/leonardo-fegato-400-gr-lattine.jpg",
        "Cibo per gatti",
        $gatti
    ),
    new Product(
        "Salmone e ribes",
        3.99,
        "https://images.freeimages.com/vhq/images/previews/bdc/cat-icons-4-43748.png",
        "https://www.naturepetshop.it/wp-content/uploads/UMIDO_ADULT_SALMONE-RIBES_400g-300x300-1.jpg",
        "Cibo per cani",
        $cani
    ),
    new Product(
        "Cuccia per cani",
        22.99,
        "https://images.freeimages.com/vhq/images/previews/bdc/cat-icons-4-43748.png",
        "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg",
        "Accessori per cani",
        $cani
    ),
    new Product(
        "Peluche per cani",
        4.99,
        "https://images.freeimages.com/vhq/images/previews/bdc/cat-icons-4-43748.png",
        "https://www.sleepypets.it/944-medium_default/gioco-per-cani-personalizzato.jpg",
        "Giochi per cani",
        $cani
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