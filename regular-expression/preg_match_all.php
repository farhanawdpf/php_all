<?php

// preg_match_all("/is/","This is a text",$output);

// print_r($output);
// echo "<br/>";

// print_r(count($output[0]));

echo "<br>";
// [abc]  
// preg_match_all("/[^eh]/","This is matches elements",$p);
// print_r ($p);
echo "<br>";
$text="T7c";
$ptrn ="/^[a-zA-Z0-9]{3,5}$/";

echo preg_match_all($ptrn,$text);

?>