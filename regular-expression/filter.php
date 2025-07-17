<?php
$input=[ 
    'This is 7  O clock',
    'this is our class',
    'this is our batch year 2024'
];

$r=preg_filter('/[0-9]+/','($0)',$input);
 print_r($r);

?>