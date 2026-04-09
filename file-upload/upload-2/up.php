<?php
if (isset($_POST["btnsubmit"])) {
  $filename = $_FILES['myfile']['name'];
  $tmpfile = $_FILES['myfile']['tmp_name'];
  $img = 'image/';

  if (!empty($filename)) {
    move_uploaded_file($tmpfile, $img . $filename);
  } else {
    echo "please select a file";
  }
}

?>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    Image :
    <input type="file" name="myfile"><br><br>
    <input type="submit" name="btnsubmit" value="Upload">
  </form>

  <?php
  // if (isset($_POST["btnsubmit"])) {
  //   echo "<image src='$img/$filename' width='300px'>";
  // }


  foreach ($filename as $file) {

    echo '<img src="' . $img / $file . '" width="150" style="margin:5px;">';
  }
  ?>
</body>