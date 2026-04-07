<?php
require_once('car_class.php');
require_once('user_class.php');
require_once('user_class2.php');

use UserOne\User;
use UserTwo\User as User2;
use Carname\Car;

$result = new Car();
$result->carInfo();
echo "<br>";
$r = new User();
$r->userInfo();
echo "<br>";

$u = new User2();
$u->show();
