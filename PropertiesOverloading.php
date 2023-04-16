<?php

class Zero {

  private array $properties = [];
  
  public function __set($name, $value): void 
  {
    $this->properties[$name] = $value;
  }

  public function __get($name)
  {
    return $this->properties[$name];
  }

  public function __isset($name): bool
  {
    return isset($properties[$name]);
  }
  
  public function __unset($name): void
  {
    unset($properties[$name]);
  }

  public function __call($name, $arguments): void 
  {
    $join = join(",", $arguments);
    echo "Call function $name with arguments $join" . PHP_EOL;
  }
  public function __callStatic($name, $arguments): void 
  {
    $join = join(",", $arguments);
    echo "Call static function $name with arguments $join" . PHP_EOL;
  }
}

$zero = new Zero();

$zero->firstName = "Muhammad";
$zero->lastName = "Fikri";

echo "First : $zero->firstName" . PHP_EOL;
echo "Last : $zero->lastName" . PHP_EOL;

$zero->sayHello('Budi');
Zero::sayHello('Budi');