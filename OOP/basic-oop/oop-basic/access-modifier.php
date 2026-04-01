<?php
class Student
{
    public $name = "Meem";
    private $age = 44;
    protected $degree = "BSC";

    private function pInfo()
    {
        echo "this is private method";
    }
    public function pInfoDetails()
    {
        echo "this is private full metod" . $this->pInfo();
    }
    public function fullInfo()
    {
        echo $this->name;
        echo $this->age;
        echo $this->degree;
    }
}


class Child extends Student
{
    public function show()
    {
        echo "My Degree" . $this->degree;
    }
}
$result = new Student();

$child = new Child();
echo "<br>";
$child->pInfoDetails();
echo "<br>";
echo $result->pInfoDetails();
// echo $result->age;
// echo "<br>";
// echo $result->degree;

// $result->fullInfo();