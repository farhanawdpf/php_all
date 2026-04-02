<?php
require_once('car.php');
if (isset($_POST['btnsubmit'])) {

    $uid = $_POST['fid'];
    $uname = $_POST['fname'];
    $c = new Car($uid, $uname);
    $c->store();
    echo "successfully";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="#" method="post">
            Id: <br>
            <input type="text" name="fid"><br>
            Name: <br>
            <input type="text" name="fname"><br><br>
            <input type="submit" name="btnsubmit">

        </form>

    </div>
</body>

</html>