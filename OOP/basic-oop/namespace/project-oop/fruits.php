<?php
namespace Fruits;
class Fruit {
  // Properties
  public $name="bmw";
  public $color="red";

  // Methods
 public function info($name) {
    $this->name = $name;
    return $this->name;
  }
}



?>