<?php

$array = [
  "firstName" => "Muhammad",
  "lastName"  => "Fikri",
];

var_dump($array);

$object = (object) $array;
var_dump($object);

require_once 'data/Person.php';

$person = new Person("Fikri",null);
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);
