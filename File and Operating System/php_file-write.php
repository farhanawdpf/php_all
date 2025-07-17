<!-- PHP Write to File - fwrite()
The fwrite() function is used to write to a file.

The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written. -->
<?php
$myfile = fopen("first.txt", "w") or die("Unable to open file!");
$txt = "this my new file.\n";

fwrite($myfile, $txt);

$txt = "this my   second line.\n";
fwrite($myfile, $txt);
$txt = "this my   third line.\n";
fwrite($myfile, $txt);
?>