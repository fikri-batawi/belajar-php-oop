<?php

require_once 'data/Category.php';

$category = new Category();
$category->setName("Hp");
$category->setName("");
echo $category->getName() . PHP_EOL;