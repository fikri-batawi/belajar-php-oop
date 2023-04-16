<?php

class Programmer {

  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

}

class BackendProgrammer extends Programmer{

}

class FrontendProgrammer extends Programmer{

}

class Company {
  public Programmer $programmer;
}

function sayHello($programmer)
{
  if($programmer instanceof BackendProgrammer){
    echo "Hi Backend Programmer, $programmer->name" . PHP_EOL;
  }elseif ($programmer instanceof FrontendProgrammer){
    echo "Hi Frontend Programmer, $programmer->name" . PHP_EOL;
  }elseif ($programmer instanceof Programmer){
    echo "Hi programmer, $programmer->name" . PHP_EOL;
  }
}