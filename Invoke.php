<?php

require_once 'data/Student.php';

$student = new Student;
$student->id = "1";
$student->name = "Fikri";
$student->value = 100;
$student->setSample("SAMPLE");

$student(1, 2, "Fikri", "uu");