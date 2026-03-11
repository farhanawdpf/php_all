<?php
//numeric[is_numeric(),round(),rand(min,max),intval();]
$num = "123.52445";
var_dump(is_numeric($num));
echo "<br>";
// convart dec  to int 
echo  intval($num);
echo "<br>";
echo  round($num, 1);
echo "<br>";

echo  floatval($num);
echo "<br>";
echo pow(2, 2);
