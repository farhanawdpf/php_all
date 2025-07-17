<?php

$foods = array("pasta","steak","fish","potatoes","Fresh","political","nopay");
$filtered_array = preg_grep("/fish/",$foods);

print_r ($filtered_array);



?>