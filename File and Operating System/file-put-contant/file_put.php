<?php
$file = 'text.txt';
// Open the file to get existing content
// The file_get_contents() reads a file into a string.
// file_get_contents(path, include_path, context, start, max_length) 
$current = file_get_contents($file);
// Append a new person to the file
$current .= "This is store function.\n";
// Write the contents back to the file
file_put_contents($file, $current);

echo file_get_contents($file);
?>