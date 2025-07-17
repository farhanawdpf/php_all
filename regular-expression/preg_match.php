<?php

$data="3/34, * Tajmahal Road";

$output = preg_match("/^[0-9,a-zA-Z \/]+$/",$data);

if(!$output){
	echo "Error <br/>";
	
}

// echo $output;

echo "<br>";

$data2="3/34, * Tajmahal Road";

$output2 = preg_match("/[0-9,a-zA-Z \/]+$/",$data2);

// echo $output2;
print_r($output2);



?>

<?php
$string = "The quick brown fox\njumps over\nthe lazy dog.";
if (preg_match('/fox.*dog/s', $string)) {
  echo "Match found!";
}
?>