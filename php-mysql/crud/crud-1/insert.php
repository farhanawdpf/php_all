<?php 
$conn = mysqli_connect('localhost','root','','testclass');
if (isset($_POST['submit'])){ 
    $name = $_POST['name'];
    $age = $_POST['age'];
     $email = $_POST['email'];
     $rs = $db->query("call insert_manu('rres','Mirpur','0193747344')");
    //  $sql = "call pro_testclass($name,$age,$email)";
     $sql = "INSERT INTO user(name,age,email) VALUES ('$name','$age','$email')";
     if(mysqli_query($conn, $sql) == TRUE){ 
        echo "DATA INSERTED";
        header('location:view.php');
     }else{ 
        echo "not inserted";
     }
}


?>

<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container"> 
    <div class="row"> 
        <div class="col-sm-3"></div>
        <a href="view.php">View Result</a>
        <div class="col-sm-6 pt-4 mt-4 border border-success"> 
    <form action="insert.php" method="POST"> 
        Name:<br>
        <input type ="text" name ="name"><br><br>
        Age:<br>
        <input type ="text" name ="age"><br><br>
        Email:<br>
        <input type ="email" name ="email"><br><br>
        <input type ="submit" name ="submit" value="insert" class="btn btn-success">
    </form>
    </div>
        <div class="col-sm-3"></div>
    </div>
   </div>
</body>
</html>