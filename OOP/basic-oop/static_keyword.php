<?php
class User
{
    public static $name = "Hello world!" . "<br>";
    const NAME = "Hello world!" . "<br>";

    public static function info()
    {
        echo "This is static method <br>";
    }
}

// $person =new User();
// $person->info();

echo User::info();
echo User::NAME;
// echo User::$name="Hello dfg!"."<br>";//error