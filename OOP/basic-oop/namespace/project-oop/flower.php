<?php
namespace Flowr;

class Flower {
  // Properties
  public $name="bmw";
  public $color="red";

  // Methods
 public function show($name) {
    $this->name = $name;
    return $this->name;
  }
}


?>