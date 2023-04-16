<?php

require_once 'data/Student.php';

$student = new Student;
$student->id = "1";
$student->name = "Fikri";
$student->value = 100;

$string = (string) $student;
echo $string . PHP_EOL;

echo $student . PHP_EOL;