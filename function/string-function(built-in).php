<?php 
//string function[strlen(),SUBSTR(string, start, length),strtoupper(),str_replace('search','replace',variable),str_word_count(),strrev(),strtolower()]
echo strlen("Country");
echo "<br>";

 function name(){ 
    $st = "This is php module and is add another module mysql.";
     return str_replace('is','IS',$st);
};
echo name();

echo "<br>";

// function nam(){ 
//     return substr("Bangladesh",4);
// }
// echo nam();
// echo "<br>";

// function nam1(){ 
//     return strtoupper("bangladesh");
// }
// echo nam1();

// echo "<br>";

// function nam2(){ 
//     return strtolower("BaNgladesh");
// }
// echo nam2();
?>