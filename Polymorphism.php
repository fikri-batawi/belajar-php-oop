<?php

require_once 'data/Programmer.php';

$company  = new Company();
$company->programmer = new Programmer("Fikri");
var_dump($company);
$company->programmer = new BackendProgrammer("Fikri");
var_dump($company);
$company->programmer = new FrontendProgrammer("Fikri");
var_dump($company);

sayHello(new Programmer("Fikri"));
sayHello(new BackendProgrammer("Fikri"));
sayHello(new FrontendProgrammer("Fikri"));