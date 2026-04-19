<h1>

    <pre>
The MySQLi functions allows you to access MySQL database servers.
Procedural style:
mysqli_connect(host, username, password, dbname, port, socket)

MySQLi extension (the "i" stands for improved)
</pre>
</h1>

<?php

$conn = mysqli_connect("localhost", "root", "", "batch-370");

if (!$conn) {
    echo "error";
}
echo "successfully connected";


?>