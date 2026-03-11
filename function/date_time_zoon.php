<?php

echo time();
echo "<br>";
echo date('d'); //date 
echo "<br>";
echo date('D'); //week
echo "<br>";
echo date('m'); //month /full month
echo "<br>";
echo date('F'); // month
echo "<br>";
echo date('M'); //short month /
echo "<br>";
echo date('y');
echo "<br>";
echo date('Y');
echo "<br>";
echo date('n'); // month numeric value
echo "<br>";
echo date('L'); // leap year return 0,1
echo "<br>";
echo date('d/m/Y'); // full formate
echo "<br>";
//time
echo date('r');
echo "<br>";

echo date('a');
echo "<br>";
echo date('A');
echo "<br>";
echo date_default_timezone_get() . '<br>' . date("h");
echo "<br>";
echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set("Asia/Dhaka");
echo "<br>";
echo date_default_timezone_get() . 'today' . date("h");
echo "<br>";
$d1 = date_create("9-03-2026");
$d2 = date_create("11-03-2026");
echo "<br>";
$diff = date_diff($d1, $d2);
echo $diff->days;