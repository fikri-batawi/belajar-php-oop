<?php

require_once 'data/SayGoodBye.php';

use Data\Traits\{Person};

$person = new Person();
$person->goodBye("Budi");
$person->hello("Joko");
$person->name = "Fikri";

var_dump($person);