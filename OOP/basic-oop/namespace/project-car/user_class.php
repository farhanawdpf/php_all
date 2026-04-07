<?php

namespace UserOne;

class User
{
    public $name = "Meem";
    public $deg = "CEO";

    public function userInfo()
    {
        echo "This is " . $this->name;
    }
}
