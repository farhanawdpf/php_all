<?php 
class User{ 
    const name="Hello world!"."<br>";
    
public static function info(){ 
   echo "This is static method <br>";
}
}

// $person =new User();
// $person->info();

echo User::info();
echo User::name;
// echo User::$name="Hello dfg!"."<br>";//error

