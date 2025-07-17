<?php 
// Function to find the largest number among three numbers
function findLargestNumber($a, $b, $c) {
    $largest = null;

    if ($a > $b && $a>$c) {
        $largest = $a;
    }

    if ($b > $a && $b > $c) {
        $largest = $b;
    }

	if ($c > $a && $c>$b) {
        $largest = $c;
    }

    return $largest; // Return the largest number
}

// Input numbers
$a = 67;
$b = 206;
$c = 150;

// Call the function to find the largest number
$result = findLargestNumber($a, $b, $c);

// Display the result
echo "The largest number among $a, $b, and $c is: $result";
?>