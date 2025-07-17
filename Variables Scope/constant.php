<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant </title>
</head>
<body>
    <h1>Constant </h1>

<!-- define(name, value); -->
    <?php 
       define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // outputs "cat"
echo ANIMALS[2]; // outputs "cat"


echo "<br>";
echo "<br>";
echo "<br>";
const BA = 'Hello World';
// const CONSTANT = 'Hello';//already define

echo BA;

const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;

?>

<?php
define("Constant", "Hello world.");
// echo CONSTANT; // outputs "Hello world."
echo Constant; // Emits an Error: Undefined constant "Constant"
               // Prior to PHP 8.0.0, outputs "Constant" and issues a warning.
?>

</body>
</html>