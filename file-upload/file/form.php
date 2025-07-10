<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["btn"])){

        $fileName=$_FILES["img"]["name"];
        $tmpName=$_FILES["img"]["tmp_name"];
        // var_dump($fileName);
        // print_r($fileName);
        // $m="img/";
        move_uploaded_file("$tmpName","img/.$fileName");


    }
    
    
    
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file"id="" name="img"> <br>
        <input type="submit" value="submit" name="btn" >
    </form>

    <?php

if(isset($_POST["btn"])){
    echo "<image src='img/.$fileName' alt='jgdkagj' width='300px'>";


}
    
    ?>

</body>
</html>