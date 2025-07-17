<?php
require "user.php";
require "car.php";
require "student.php";
 
use Sapp\User;
use Capp\Car;
use Uapp\User as User2 ;

$object = new Car();
$object->info();
$user =new User2();
$user->show ();
$std =new User();
$std->display ();



