<?php

namespace Data;

class Shape {

  public function getCorner(): int
  {
    return 01;
  }

}

class Rectangel extends Shape{

  public function getCorner(): int
  {
    return 4;
  }

  public function getParentCorner(): int
  {
    return parent::getCorner();
  }

}