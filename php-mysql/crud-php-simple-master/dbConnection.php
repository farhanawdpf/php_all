<?php
$databaseHost = 'localhost';
$databaseName = 'new_database';
$databaseUsername = 'root';
$databasePassword = '';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
