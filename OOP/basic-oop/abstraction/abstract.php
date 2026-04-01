<?php
// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

// abstract have properties.
// abstract class methods is public or protected
abstract class User
{
    abstract public function getName();
    abstract public function info();

    public function display()
    {
        echo "third";
    }
}

class wdpf extends  User
{
    public function getName()
    {
        echo "Done";
    }

    public function info2()
    {
        echo "third2";
    }

    public function info()
    {
        echo "third2";
    }
}

class E extends wdpf
{
    public function getName()
    {
        echo "well done";
    }
}



$add = new E();
$add->getName();
$add->display();
