<?php
//string function[strlen(),SUBSTR(string, start, length),strtoupper(),str_replace('search','replace',variable),str_word_count(),strrev(),strtolower(),ucwords()]
echo strlen("Country");
echo "<br>";
$info = "This is bangladesh";
echo  strlen($info);
echo "<br>";
echo  strtoupper($info);
echo "<br>";
echo  strtolower($info);
echo "<br>";
echo  str_replace("bangladesh", "Indea", $info);
echo "<br>";
echo ucwords($info);
echo "<br>";
echo str_word_count($info);
echo "<br>";
echo strrev($info);
echo "<br>";
echo ucfirst($info);
echo "<br>";
