<?php
// file_put_contents(filename, data, mode, context)
$write = file_put_contents("store.txt", "hello\n", FILE_APPEND);
echo "successfully";

$p = file_get_contents("store.txt");
echo nl2br($p);
// echo $p;

// $result = file("store.txt");

// foreach ($result as $r) {
//     echo $r . "<br>";
// }