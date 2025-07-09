<?php 

if(isset($_POST['btnLogin'])){ 
    $username=$_POST['txtUsername'];
    $password=$_POST["txtPassword"];
     $file=file("data.txt");


foreach($file as $line){
		  
		  list($_username,$_password)=explode(",",$line);
		  
		  if($_username==$username && $_password==$password){
			
			 header("location:demo.php");
			  
		  }else{
			  $msg="Username or Password is incorrect!";
		  }
		  
	  }


    // if($username=="admin" && $password==123){ 
  
    //     header("location:demo.php");
    // }else{ 
    //     $msg="error";
    // }

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
    <?php 
    echo isset($msg)?$msg:"";
    ?>
    <form action="#" method="post"> 
    <div>
    Username<br/>
    <input type="text" name="txtUsername" />
   </div>
   <div>
    Password<br/>
    <input type="password" name="txtPassword" />
   </div>
   <div>
    <input type="submit" value="Log In" name="btnLogin" />
   </div>
    </form>
</body>
</html>