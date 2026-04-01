<?php
class Car
{
    public $name;
    public $color;


    public function setName($nam)
    {
        $this->name = $nam;
    }
    public function getName()
    {
        return $this->name;
    }


    public function __destruct()
    {
        echo " <br>bye";
    }

    public function __construct($n, $c)
    {
        echo "Hello " . $this->name = $n . " is " . $this->color = $c;
    }
}

$result = new Car("Toyota", "Red");

$result->setName("BMW");
echo "<br>";
echo $result->getName();
