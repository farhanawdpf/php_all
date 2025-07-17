<?php
// string preg_quote ( string $str [, string $delimiter] );
// Definition and Usage
// preg_quote() takes str and puts a backslash in front of every character that is part of the regular expression syntax.
echo preg_quote("This is a. this is another.. this is another");

//This is a \$ text\.

?>