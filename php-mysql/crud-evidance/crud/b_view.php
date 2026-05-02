<?php
include 'db.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM brand WHERE id=$id");

header("Location: b_view.php");
$result = mysqli_query($conn, "SELECT * FROM brand");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] . " - " . $row['name'] . " - " . $row['contact'];
    echo " <a href='delete.php?id=" . $row['id'] . "'>Delete</a><br>";
}
