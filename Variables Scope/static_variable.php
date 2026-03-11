<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function test()
    {
        static $x = 0;
        echo $x;
        $x++;
    }

    test();
    test();
    test();
    ?>
</body>

</html>