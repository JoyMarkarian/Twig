<?php

require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new \Twig\Environment($loader);

echo $twig->render('products.html.twig', [
    'products' => $products
]);