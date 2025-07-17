<?php
$myfile = fopen("myfile.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("myfile.txt"));
fclose($myfile);
?>
