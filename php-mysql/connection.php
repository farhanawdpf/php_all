<?php 
// object system
// $hostname = "localhost";
// $user = "root";
// $password = "";
// $dbname = "db_name1";
// $conn = new mysqli($hostname,$user,$password,$dbname);
// if($conn->connect_error){ 
// die("Connection Failed.".$conn->connect_error);
// }
// echo "connection succefully";


// procedural way

// $hostname = "localhosts";
// $user = "root";
// $password = "";
// $dbname = "db_name";
$conn= mysqli_connect("localhost","root","","new_database");



if(!$conn){ 
die("Connection Failed.");
}
echo "connection successfully";
?>