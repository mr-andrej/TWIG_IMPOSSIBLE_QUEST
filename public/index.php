<?php

require '../vendor/autoload.php';

use Twig\Environment; // Essential parts. The vendor autoload doesn't work properly
use Twig\Loader\FilesystemLoader;

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);
$products = ['Ibuprofen', 'Paracetamol', 'Morphine', 'Laudanum', 'Opium'];

echo $twig->render('index.html.twig', ['product' => $products]);