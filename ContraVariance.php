<?php

use Data\CatShalter;
use Data\DogShelter;
use Data\AnimalFood;
use Data\Food;

require 'data/AnimalShelter.php';
require_once 'data/Food.php';

$catShalter = new CatShalter();
$cat = $catShalter->adopt("Luna");
$cat->eat(new AnimalFood);

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new Food);