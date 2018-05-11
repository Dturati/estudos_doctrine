<?php
require_once "bootstrap.php";

use App\Entities\Product;

$ano = (new \DateTime())->format('Y-m-d H:i:s');
$product = new Product();
$product->setName('Macaco mecanico');
$product->setPeso(300);
//$product->setYear($ano);

print_r($product->getYear());

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";