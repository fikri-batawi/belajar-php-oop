<?php

require_once 'data/Person.php';

$fikri = new Person("Fikri", null);
$fikri->name = "Fikri";
$fikri->sayHello("Lala");


$budi = new Person("Budi", "Jakarta");
$budi->name = "Budi";
$budi->sayHello(null);

$fikri->info();
$budi->info();