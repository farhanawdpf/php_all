<?php
class Car
{
    public $model = "sd12";
    public $color = "Red";
    public $name = "BMW";

    function info($c)
    {
        $this->color = $c;
        return $this->color;
    }
}
$result = new Car();

echo $result->color;
echo "<br>";
echo $result->info("black");
