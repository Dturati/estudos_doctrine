<?php
require_once "bootstrap.php";

use App\Entities\Product;


$product = new Product();
$product->setName('maria');

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";