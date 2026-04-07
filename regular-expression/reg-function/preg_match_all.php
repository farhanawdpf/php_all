<?php
$text = "Cat Dog Cat Bird";

preg_match_all("/Cat/", $text, $matches);

print_r($matches);
