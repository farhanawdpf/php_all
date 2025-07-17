<?php 
// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

// abstract have properties.
// abstract class methods is public or protected
abstract class User{ 
    abstract public function getName();
  
    public function display(){ 
        echo "third";
    }

}

class wdpf extends  User{ 
    public function getName(){ 
        echo "Done";
    }
  
    public function display(){ 
        echo "third2";
    }
}
class we extends  User{ 
    public function getName(){ 
        echo "Done2";
    }
  
    public function display(){ 
        echo "third3";
    }
}


$add = new we;
$add->getName();
$add->display();
?>