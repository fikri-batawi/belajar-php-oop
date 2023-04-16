<?php

require_once 'data/Conflict.php';
require_once 'data/Helper.php';

use Data\One\{Conflict, Dummy, Sample};
use function Helper\{helpMe};
use const Helper\{APPLICATION};

$conflict = new Conflict();
$dummy  = new Dummy();
$sample = new Sample();

