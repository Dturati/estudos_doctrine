<?php
require_once "bootstrap.php";

use App\Entities\Product;

$productRepository = $entityManager->getRepository(Product::class);

$produtos = $productRepository->findAll();

$nomes  = array_map(function($product){
        return $product->getName();
},$produtos);

print_r($nomes);
