<?php
include_once __DIR__ . "/Category.php";
include_once __DIR__ . "/Product.php";
$cani = new Category("Cani", "https://images.freeimages.com/vhq/images/previews/bdc/cat-icons-4-43748.png");
$gatti = new Category("Gatti", "https://cdn.icon-icons.com/icons2/2242/PNG/512/perro_icon_134885.png");

$products = [
    new Product(
        "Palla morbida",
        3.99,
        "https://www.lelepetshop.it/images/thumbs/0002949_gioco-cane-palla-tennis-gigante-maxi-15-cm-diametro_550.png",
        "Giochi per cani",
        $cani
    ),
    new Product(
        "Cuccia per gatto",
        29.99,
        "https://croci.net/cdn/shop/files/Cuccia_morbida_per_gatto_Bobby_Poilu.jpg?v=1709817054&width=850",
        "Accessori per gatti",
        $gatti
    ),
    new Product(
        "Crocchette per cani",
        9.99,
        "https://www.pacopetshop.it/16048-home_default/naxos-wellness-valle-bruna-mini-adult-per-cani.jpg",
        "Cibo per cani",
        $cani
    ),
    new Product(
        "Gioco per gatti",
        11.99,
        "https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw719c0a68/images_dmail/large/509459l_1.jpg",
        "Giochi per gatti",
        $gatti
    ),
    new Product(
        "Cibo umido con fegato",
        1.99,
        "https://www.naturepetshop.it/wp-content/uploads/leonardo-fegato-400-gr-lattine.jpg",
        "Cibo per gatti",
        $gatti
    ),
    new Product(
        "Salmone e ribes",
        3.99,
        "https://www.naturepetshop.it/wp-content/uploads/UMIDO_ADULT_SALMONE-RIBES_400g-300x300-1.jpg",
        "Cibo per cani",
        $cani
    ),
    new Product(
        "Cuccia per cani",
        22.99,
        "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg",
        "Accessori per cani",
        $cani
    ),
    new Product(
        "Peluche per cani",
        4.99,
        "https://www.sleepypets.it/944-medium_default/gioco-per-cani-personalizzato.jpg",
        "Giochi per cani",
        $cani
    ),
];