<?php

namespace UserTwo;

class User
{
    public $name = "Sumi";
    public $deg = "Co-founder";

    public function show()
    {
        echo "This is " . $this->name . "And Designation: " . $this->deg;
    }
}
