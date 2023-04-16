<?php


// Manual
function getGenap(int $max)
{
  $array = [];
  for($i = 1; $i <= $max; $i++){
    if($i % 2 == 0){
      $array[] = $i;
    }
  }
  return $array;
}

foreach(getGenap(100) as $value){
  echo "Genap : $value" . PHP_EOL;
}


// Menggunakan bawaan PHP Yield
function getGanjil(int $max)
{
  for($i = 1; $i <= $max; $i++){
    if($i % 2 == 1){
      yield $i;
    }
  }
}

foreach(getGanjil(100) as $value){
  echo "Ganjil : $value" . PHP_EOL;
}

