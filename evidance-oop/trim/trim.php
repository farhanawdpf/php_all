<?php 
$text = "  Hello World!  ";
$trimmed_text = trim($text);
echo $trimmed_text; // Output: Hello World!
 echo "<br>";
$text_with_chars = "###Hello World!!!###";
$trimmed_text_with_chars = trim($text_with_chars, "#!");
echo $trimmed_text_with_chars; // Output: Hello World


// trim(string,charlist)

// charlist	Optional. Specifies which characters to remove from the string. If omitted, all of the following characters are removed:
// "\0" - NULL
// "\t" - tab
// "\n" - new line
// "\x0B" - vertical tab
// "\r" - carriage return
// " " - ordinary white space

?>