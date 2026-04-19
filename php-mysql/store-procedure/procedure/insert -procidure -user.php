<?php
$db = mysqli_connect('localhost', 'root', '', 'batch70');
if (isset($_POST['submit'])) {
   $n = $_POST['sname'];
   $a = $_POST['address'];
   $e = $_POST['semail'];
   $c = $_POST['scontact'];
   $db->query("call manufacturer('$n','$a','$e','$c')");
}

?>

<html lang="en">

<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Document</title>
</head>

<body>
   <div class="container">
      <div class="row">
         <h2>Insert User</h2>
         <!-- user form -->
         <div class="col-sm-6 pt-4 border border-success">
            <form action="#" method="POST">
               Name:<br>
               <input type="text" name="sname"><br><br>
               Address:<br>
               <input type="text" name="address"><br><br>
               Email:<br>
               <input type="text" name="semail"><br><br>
               Contact:<br>
               <input type="text" name="scontact"><br><br>
               <input type="submit" name="submit" value="insert" class="btn btn-success">
            </form>
         </div>

      </div>
   </div>


</body>

</html>