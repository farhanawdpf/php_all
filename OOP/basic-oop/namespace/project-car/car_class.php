<?php

namespace Carname;

class Car
{
    public $name = "BMW";
    public $model = "i70";

    public function carInfo()
    {
        echo "This is " . $this->name;
    }
}
