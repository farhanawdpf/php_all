<?php
if(isset($_POST['btnsubmit'])){
  $tmp_name=$_FILES["myfile"]["tmp_name"];
  $name=$_FILES['myfile']['name'];
  
	  copy($tmp_name,"image/".$name);
	  
}
?>


<body>
<div style=" width:500px; margin:10px auto">
<form action="#" method="post" enctype="multipart/form-data">
<fieldset>
<input type="file" name="myfile"><br><br>
<input type="submit" name="btnsubmit"><br>
</fieldset>
</form>



<?php
if(isset($_POST['btnsubmit'])){

  echo "<img src='image/$name' width='300px'>";
}

?>
</div>

</body>