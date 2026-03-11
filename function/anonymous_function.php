<?php
$add = function ($a) {
    echo "hello $a ";
};
$add("world");
// arrow function

$functionvarName = fn() => "Hello World";

echo $functionvarName();

$a = function () {};


$b = fn($a, $b) => "";
