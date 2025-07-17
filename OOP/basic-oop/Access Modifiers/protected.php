<?php
class Animal {
    protected $type;

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return "This is $this->type";
    }

    protected function info(){ 
        return "This is parent protected method";
    }
   
    
}

Class Food extends Animal{ 

     public function infoDetails(){ 
        return $this->info();
    }
public function getType() {
        return "This is $this->type";
    }
}



$p= new Food();
// echo $p->type="Fruits";

$p->setType("Animals");
echo $p->getType();
echo $p->infoDetails();



// class Dog extends Animal {
//     public function getType() {
//         return "This is a $this->type.";
//     }
// }

// $dog = new Dog();
// $dog->setType("dog");
// $dog->type="Fruits";
// echo $dog->type; // Error: Cannot access protected property
// echo $dog->getType(); // Output: This is a dog.
?>