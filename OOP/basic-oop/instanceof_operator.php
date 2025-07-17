<?php 
// The instanceof keyword is used to check if an object belongs to a class. The comparison returns true if the object is an instance of the class, it returns false if it is not.

class A{ 
    public $name ="Hello!";
}

class B{  
    public $brand ="my class!";
}

$a = new A();
$b = new B();

var_dump($b instanceof A);
var_dump($a instanceof A);
?>