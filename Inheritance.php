<?php

require_once 'data/Manager.php';

$manager  = new Manager();
$manager->name = "Budi";
$manager->sayHello("Fikri");

$vp  = new VicePresident();
$vp->name = "Fikri";
$vp->sayHello("Budi");