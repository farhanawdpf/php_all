<?php
// file_put_contents(filename, data, mode, context)
echo file_put_contents("store.txt","hello");
// echo file_get_contents("store.txt");

echo "<br>";
echo "<br>";
echo "<br>";
//explode() function
// explode(separator,string,limit);
$data ="this is our php class";
echo $data;
echo "<br>";
echo "<br>";
print_r(explode(" ",$data,2))
?>