<?php 
require_once "bootstrap.php";
use App\Entities\Product;

$product = $entityManager->find(Product::class,1);

print_r($product);
$product->setName("chave de roda");

$entityManager->flush();
