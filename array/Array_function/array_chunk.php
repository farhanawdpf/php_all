<?php
//array create
//array_chunk(array, size, preserve_key)
//2 + 2 + 2 + 2 = 8 → 4  chunk
$c = array("ab", "bc", "ca", "bd", "rg", "tk", "ab", "bc", "ca",);

$h = array_chunk($c, 2);
print_r($h);
echo "<br>";
echo json_encode($h);

 //[ 
//     ["ab", "bc"];
//     ["ca", "bd"];
//     ["rg", "tk"];
//     ["ab", "bc"];
//     ["ca"];


// ]