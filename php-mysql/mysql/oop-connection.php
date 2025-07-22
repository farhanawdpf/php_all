<h1> 
    <pre> 
    The connect() / mysqli_connect() function opens a new connection to the MySQL server.
    Syntax
Object oriented style:
$mysqli -> new mysqli(host, username, password, dbname, port, socket)

MySQLi extension (the "i" stands for improved)
    </pre>
</h1>

<?php 
// object system
$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "crud";
$conn = new mysqli($hostname,$user,$password,$dbname);
// or
// $conn = new mysqli("localhost", "root","","crud-one");
if($conn->connect_error){ 
die("Connection Failed.".$conn->connect_error);
}
echo "connection succefully";


?>