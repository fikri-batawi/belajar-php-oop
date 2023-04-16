<?php

namespace Data;

require 'Animal.php';

interface AnimalShelter {

  public function adopt(string $name): Animal;

}

class CatShalter implements AnimalShelter {

  public function adopt(string $name): Cat
  {
    $cat = new Cat();
    $cat->name = $name;
    return $cat;
  }

}

class DogShelter implements AnimalShelter {

  public function adopt(string $name): Dog
  {
    $dog = new Dog();
    $dog->name = $name;
    return $dog;    
  }

}