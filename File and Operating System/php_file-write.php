<!-- PHP Write to File - fwrite()
The fwrite() function is used to write to a file.
 fopen() → file open
fwrite() → file write
fclose() → file stop -->
The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be
written.

<!-- File Write → fwrite() -->
<?php

//write
$r = fopen("store1.txt", "w");
// fwrite($r, "this is new file"); or
$ur = "this is new file.";
fwrite($r, $ur);
fclose($r);

//read
$read = fopen("store1.txt", "r");

echo fread($read, filesize("store1.txt"));


?>