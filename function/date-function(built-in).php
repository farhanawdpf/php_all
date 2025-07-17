<?php 
//date function
//a.date_diff( difference betn two date )
//b.date_format()

$d1 =date_create("28-03-2024");
$d2 =date_create("28-06-2024");
$diff = date_diff($d1,$d2);
echo $diff->format("%R%a days");
echo "<br>";
date("d-m-y");
echo date('l');

echo "<br>";
echo date('h i sa');
echo "<br>";
//current time show

$t =time();
echo (date('h i sa',$t+3600));
echo "<br>";
echo(date("Y-m-d",$t));
echo "<br>";
$g=time();
echo date('h i sa',$g);


?>