<?php
require 'fruits.php';
require 'flower.php';

use Flowr\Flower;
use Fruits\Fruit;
$banana = new Fruit();
echo $banana->name;
echo "<br>";
echo $banana->info('sdsa');

$flowr =new Flower();
echo $flowr-> show("Rose");

?>