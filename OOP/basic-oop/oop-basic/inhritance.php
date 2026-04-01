<?php
class Student
{
    public $name = "Meem";
    private $age = 20;
    protected $address = "Dhaka";
    public $id;
    public $subject;

    public function details($n)
    {
        echo "My Name is" . $this->age = $n;
    }



    public function __construct()
    {
        echo "Hello PWAD";
    }

    public function __destruct()
    {
        echo "<br>bye";
    }
}


class Teacher extends Student
{
    public $expriance;
    public function teacherDetails()
    {
        echo "Hello teacher";
    }
}

class Authority extends Teacher
{
    public $position = "consultent";
    public function info()
    {
        echo $this->address;
    }
    public function __construct()
    {
        echo "Hello wdpf";
    }
    public function isdb()
    {
        echo "Result is published";
    }
}

// $st = new Student();
// echo "<br>";
// $st->details(" Lyies");

echo "<br>";

// $tr = new Teacher();
// echo $tr->name;

// $tr->teacherDetails();
// $tr->details(" Lyies");


$at = new Authority();
echo $at->position;
echo $at->info();
// echo $at->age;
echo "<br>";
$at->isdb();
$at->details("34");

$at->teacherDetails();
