<h1> 

<pre> 
The MySQLi functions allows you to access MySQL database servers.
Procedural style:
mysqli_connect(host, username, password, dbname, port, socket)

MySQLi extension (the "i" stands for improved)
</pre>
</h1>

<?php 

$conn= mysqli_connect("localhost","root","","new_database");


if(!$conn){ 
die("Connection Failed.");
}
echo "connection successfully";
?>