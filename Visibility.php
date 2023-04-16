<?php

require_once 'data/Product.php';

$product = new Product("Apple", 3000);

echo $product->getName() . PHP_EOL;

$dummy = new ProductDummy("Jeruk", 1000);
$dummy->info();