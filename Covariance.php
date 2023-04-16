<?php

use Data\CatShalter;
use Data\DogShelter;

require 'data/AnimalShelter.php';

$catShalter = new CatShalter();
$cat = $catShalter->adopt("Luna");
var_dump($cat);

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
var_dump($dog);