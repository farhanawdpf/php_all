<form method="post">
    name:<input type="text" name="n">

    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $result1 = $_POST['n'];

    if ($result1 >= 80) {
        echo "grade . $result1";
    }
}





?>