<?php
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

$banana = new Fruit();
echo $banana->name;
echo "<br>";
echo $banana->info('sdsa');



?>
 