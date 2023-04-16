<?php


// Foreach without iteration
class Data {

  var string $first   = "First";
  var string $second  = "second";
  protected string $three = "three";
  private string $four    = "four";

}

$data = new Data();
foreach($data as $property => $value){
  echo "$property : $value" . PHP_EOL;
}

// Foreach with iteration
class Iteration implements IteratorAggregate {

  var string $first   = "First";
  var string $second  = "second";
  protected string $three = "three";
  private string $four    = "four";

  public function getIterator(): Traversable
  {
    $array = [
      "first" => $this->first,
      "second" => $this->second,
      "three" => $this->three,
      "four"  => $this->four,
    ];

    return new ArrayIterator($array);
  }
}

$iterator = new Iteration();
foreach($iterator as $property => $value){
  echo "$property : $value" . PHP_EOL;
}

