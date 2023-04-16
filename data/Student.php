<?php

class Student {

  public string $id; 
  public string $name; 
  public int $value; 
  private string $sample; 

  public function setSample(string $sample){
    $this->sample = $sample;
  }

  public function __clone()
  {
    unset($this->sample);
  }

  public function __toString()
  {
    return "Student id:$this->id, name:$this->name, value:$this->value";
  }

  public function __invoke(...$arguments): void
  {
    $join = join(',', $arguments);
    echo "Invoke sudent from arguments $join" . PHP_EOL;
  }

  public function __debugInfo()
  {
    return [
      "id" => $this->id,
      "name" => $this->name,
      "value" => $this->value,
      "sample" => $this->sample,
      "AUTHOR" => "FIKRI",
    ];
  }
}