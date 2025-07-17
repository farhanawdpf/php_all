<?php 
class ParentClass{ 
    public $name="Hello";

   public function details(){ 
        echo "This is parent Class.";
    }
    public function show(){ 
        echo "This is parent Class and show method.";
    }
}

$p =new ParentClass();
echo $p->name;
echo"<br>";
echo $p->details();
?>