<?php
$db = mysqli_connect('localhost', 'root', '', 'crud-one');
if (isset($_POST['submit'])) {
   $n = $_POST['sname'];
   $a = $_POST['sage'];
   $e = $_POST['semail'];
   $c = $_POST['scontact'];
   $db->query("call call_users('$n','$a','$e','$c')");
}

if (isset($_POST['product_submit'])) {
   $n = $_POST['name'];
   $p = $_POST['price'];
   $uid = $_POST['uid'];

   $db->query("call call_product('$n','$p','$uid')");
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
         <h2>Insert User</h2>
         <!-- user form -->
         <div class="col-sm-6 pt-4 border border-success">
            <form action="#" method="POST">
               Name:<br>
               <input type="text" name="sname"><br><br>
               Age:<br>
               <input type="text" name="sage"><br><br>
               Email:<br>
               <input type="text" name="semail"><br><br>
               Contact:<br>
               <input type="text" name="scontact"><br><br>
               <input type="submit" name="submit" value="insert" class="btn btn-success">
            </form>
         </div>
         <div class="col-sm-6 pt-4 border border-success">
            <h2>Insert Products</h2>
            <form action="#" method="POST">
               Product Name:<br>
               <input type="text" name="name"><br><br>
               Price:<br>
               <input type="text" name="price"><br><br>
               User:<br>
               <select name="uid">
                  <?php
                  $users = $db->query("select * from users");
                  while (list($_mid, $_mname) = $users->fetch_row()) {
                     echo "<option value='$_mid'>$_mname</option>";
                  }
                  ?>
               </select>
               <br><br>
               <input type="submit" name="product_submit" value="Submit" class="btn btn-success">
            </form>
         </div>
      </div>
      <div class="row"> 
      <h3>View Product</h3>

      <table border="1" style="border-collapse: collapse;" > 
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>user</th>
            <th>Contact</th>
         </tr>
         <?php 
            $product = $db->query(" select * from product_info");
            while(list($_id,$_name,$_price,$_mname,$_mcont) = $product->fetch_row()){
               echo "<tr> 
                     <td>$_id</td>
                     <td>$_name</td>
                     <td>$_price</td>
                     <td>$_mname</td>
                     <td>$_mcont</td>
                  </tr>";
            }
         
         ?>
      </table>
      </div>
   </div>


</body>

</html>