<?php
if (isset($_POST["btnsubmit"])){ 
  // print_r(myfile);
  $filename = $_FILES['myfile']['name'];
  $tmpfile = $_FILES['myfile']['tmp_name'];
  $size = $_FILES['myfile']['size'];
  // $img = 'image/';
  //var_dump ($tmpfile);
  //var_dump ($filename);
  $kb=$size/1024;
   if(!empty($filename)){ 
    //move_uploaded_file("$tmpfile","$img.$filename");
    
    if($kb<400){
      move_uploaded_file($tmpfile,$img.$filename);
      echo "successfullly!";
    }
    else { 
    echo "please select a file";
   }
}
}


?>

<body>
<form action="" method="post" enctype="multipart/form-data"> 
  Image :
  <input type="file" name="myfile" ><br><br>
  <input type="submit" name="btnsubmit" value="Upload"> 
</form>

<?php

	echo "<image src='$img.$filename' alt='jgdkagj' width='300px'>";

?>
</body>
</html>
