<?php
// preg_match(pattern, input, matches, flags, offset)

// preg_match(pattern, input, matches)
$str = "Returns a new string where matched patterns have been replaced with another string ";
$p = "/ String /i";


echo preg_match($p, $str);
?>