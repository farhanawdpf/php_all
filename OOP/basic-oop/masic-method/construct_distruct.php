<?php 
class Car{ 
public $name;
public $model="e01";
function __destruct(){ 
    echo "<br>bye";
}
 function info(){ 
    echo "this is info method";
 }
 function __construct($name){ 
        echo ",this is <br>".$this->name=$name;
    }

 
}
$newObj=new Car('Toyota');
echo "<br>";
 $newObj->info();


?>