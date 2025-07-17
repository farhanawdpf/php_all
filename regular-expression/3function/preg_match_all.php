<?php
// preg_match_all(pattern, input, matches, flags, offset)

$s ="The rain in SPAIN falls mainly on the plains.";
$pattern = "/[^in|The] /i";
echo preg_match_all($pattern, $s);

?>