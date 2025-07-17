<?php

// preg_replace(pattern, replacement, subject)
// preg_replace(patterns, replacements, input, limit, count)
$str = "Visit Microsoft! Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "country", $str);

?>