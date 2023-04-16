<?php

require_once 'data/Person.php';

$person = new Person("Muhammad Fikri", "Jakarta");
$person->name = "Muhammad Fikri";
$person->address = "Jakarta";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "country : $person->country" . PHP_EOL;

