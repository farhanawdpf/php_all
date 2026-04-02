<?php

// $a = [
// 	[1, "Assad", 40, "e@gmail.com", "+5676577"],
// 	[2, "Assad", 40, "e@gmail.com", "+5676577"],
// 	[3, "Assad", 40, "e@gmail.com", "+5676577"],
// 	[4, "Assad", 40, "e@gmail.com", "+5676577"],

// ];



//for variable value assign  and array destructuring
// foreach ($a as list($id, $name, $age)) {
// 	echo "$id | $name | $age";
// }



// foreach ($a as $s) {
// 	list($id, $name) = explode("", trim("$s"));
// 	echo "$id | $name<br/>";
// }

// $data = ["Farhana", "Dhaka", 77];

// list($n, $a, $m) = $data;

// echo $n; // Farhana
// echo $m;  //77

$data = [
	"1,Meem,Dhaka",
	"2,Ifty,Khulna",
	"3,Ridoy,Barisal"
];

// foreach ($data as $d) {
// 	list($id, $name, $city) = explode(",", "$d");
// 	echo "ID: " . $id . "<br>";
// 	echo "Name: " . $name . "<br>";
// 	echo "City: " . $city . "<br><br>";
// }

$files = file("data.txt");

foreach ($files as $file) {
	list($x, $y, $z) = explode(",", "$file");
	echo "ID:" . $x . " " . "Name: " . $y . " " . "Address: " . $z . "<br>";
}




// foreach ($file as $line) {
// 	list($id, $name, $city) = explode(",", trim($line));

// 	echo $id . " - " . $name . " - " . $city . "<br>";
// }


// 2D Array


// $data = [
// 	[1, "Meem", "Dhaka"],
// 	[2, "lyies", "Khulna"],
// 	[3, "Ridoy", "Barisal"]
// ];

// foreach ($data as $row) {
// 	list($id, $name, $city) = $row;

// 	echo $id . " " . $name . " " . $city . "<br>";
// }