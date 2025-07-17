<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

if(isset($_FILES['img'])){
$file_name = $_FILES['img']['name'];
$tmp_file = $_FILES['img']['tmp_name'];
$file_size = $_FILES['img']['size'];
$img = "image/";
$kb=$file_size/1024;


  if($kb>400){ 
  echo "File is too large";
  } else { 
    move_uploaded_file($tmp_file,$img.$file_name);
    echo "successfully";
  }
}
?>
<body>
<form action="#" method="post" enctype="multipart/form-data"> 
    <div> Upload:
      <input type="file" name="img">
      <input type="submit" value="submit">
    </div> 
</form>
<?php 

if(isset($_FILES['img'])){
  echo "<image src='$img/$file_name' width='300px'>";
}

?>









</body>