<?php
$add = fn($a, $b) => $a + $b;
echo $add(3, 4); 
?>

<?php
// Anonymous function
$add = function($a, $b) {
    return $a + $b;
};

echo $add(2, 3);        // Output: 5

echo "<br>";


// function info (){ 
//     echo "hello";
// }
// info ();

  $info= fn() =>"hello";  
 echo $info();

// Arrow function
// $addArrow = fn($a, $b) => $a + $b;

// echo $addArrow(2, 3);   // Output: 5

?>