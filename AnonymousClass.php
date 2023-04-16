<?php

interface HelloWorld {

  function sayHello(): void;

}

$helloWorld = new class implements HelloWorld {

  public function sayHello(): void
  {
    echo "Hello World" . PHP_EOL;
  }

};

$helloWorld->sayHello();


// Dengan constructor
$helloAll = new class("Lili") implements HelloWorld {

  private string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function sayHello(): void
  {
    echo "Hello all, iam $this->name" . PHP_EOL;
  }
};

$helloAll->sayHello();