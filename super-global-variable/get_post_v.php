<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        super global variable
        $_REQUEST,$_GET,$_POST
    </h1>
    <?php
    $store = $_GET['n'];
    // echo $_GET['n'];
    print "Name:" . $store;
    ?>
    <div>
        <form action="" method="get">
            Name:
            <input type="text" name="n">
            <input type="submit" value="Submit">
        </form>
    </div>


</body>

</html>