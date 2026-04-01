<?php
// $myfile = fopen("myfile.txt", "r") or die("Unable to open file!");
// echo fread($myfile, filesize("myfile.txt"));
// fclose($myfile);



// $result = fopen("first.txt", "r") or die("file is not found");

// echo fread($result, filesize("first.txt"));
// fclose($result);

// echo readfile("data.txt");

$r = file_get_contents("data.txt");
echo $r;
