<?php
$array1 = ["a", "b", "u"];
$array2 = ["a", "w", "t"];
$array3 = ["g", "a", "c"];

$result = array_diff($array2, $array3, $array1,);
print_r($result);
