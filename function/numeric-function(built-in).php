<?php 
//numeric[is_numeric(),round(),rand(min,max);]
function num(){ 
    echo is_numeric(45);
};
num();
echo "<br>";

function num2(){ 
    echo ("Round: ".round(34.4545));
}

num2();
echo "<br>";
function num3(){ 
    echo rand(1000,9999);
    echo "<br>";
    echo ("Random Number: ".rand());
}

num3();
?>