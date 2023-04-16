<?php

require_once 'data/Manager.php';

$manager = new Manager("Joko");
$manager->sayHello("Lolo");


$vp = new VicePresident();
$vp->name = "Fikri";
$vp->sayHello("Jokoo");