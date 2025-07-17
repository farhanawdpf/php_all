<?php 
//A recursive function in PHP is a function that calls itself within its own definition
// recursive function



function Info ($num){ 

    if($num<=8){ 
        echo "$num <br>";
        Info($num+1);
    }
}
Info (3);










echo "<br>";
function factorial($n) {
  if ($n == 0) { // Base case: factorial of 0 is 1
    return 1;
  } else { // Recursive case: n * factorial(n-1)
    return $n * factorial($n - 1);
  }
}

echo factorial(5); // Output: 120
echo "<br>";

function display_numbers($n) {
    if ($n > 0) {
        display_numbers($n - 1);
        echo $n . " ";
    }
}
display_numbers(5);//5 4 3 2 1 


?>