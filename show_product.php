<?php declare(strict_types=1); 
use App\Entities\Product;


require "bootstrap.php";

$id = 2;

$product = $entityManager->find(Product::class,$id);

print_r($product->getName());