<?php
$person = ['Name' => 'Ifty', 'age' => 15, 'round' => '70'];
// $a_key = array_key_first($person);
// $a_value = $person[$a_key];
// echo $a_key . ':' . $a_value;
// echo "<br>";
// echo $person["name"];
// echo $person["age"];
// echo $person["round"];

//second key

$b_key = array_keys($person);
$second = $b_key[2];
$b_value = $person[$second];
echo $second . ':' . $b_value;
