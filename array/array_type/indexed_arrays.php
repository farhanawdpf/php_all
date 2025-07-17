
<?php 
//Index Array(Automatically or manually)

//Automatically
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

// $cars =["Volvo", "BMW", "Toyota"];


// Display all array items:

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}


 $pen = ["Parker", "Flair", "Cello"];
echo $pen[2];  

echo "<br>";
// manually
$cars = [];
// $cars = array();//alternative way
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

var_dump($cars);
echo $cars[1];
?>
