<?php 
 #Interfaces allow you to specify what methods a class should implement.
// 1.Interfaces cannot have properties
// 2.All interface methods must be public
// 3.All methods in an interface are abstract
interface User{ 
    public function getName();
    public function info();
    public function display();
   

}

class wdpf implements User{ 
    public function getName(){ 
        echo "first";
    }
    public function info(){ 
        echo "second";
    }
    public function display(){ 
        echo "third";
    }
}

$add = new wdpf;
$add->getName();
echo "<br>";
$add->info();
echo "<br>";
$add->display();
?>