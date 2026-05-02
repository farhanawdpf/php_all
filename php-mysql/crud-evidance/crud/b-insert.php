<?php
$db = mysqli_connect("localhost", "root", "", "batch-m70");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO brand (name, contact) VALUES ('$name', '$contact')";
    mysqli_query($db, $sql);
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Contact: <input type="text" name="contact"><br>
    <button type="submit" name="submit">Save</button>
</form>