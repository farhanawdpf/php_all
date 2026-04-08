<?php

print_r($_FILES);

?>
<?php
// echo "File Name: " . $_FILES['filen']['name'];
// echo "<br>";
// echo "File type: " . $_FILES['filen']['type'];
// echo "<br>";
// echo "File temporary name: " . $_FILES['filen']['tmp_name'];
// echo "<br>";
// echo "File size : " . $_FILES['filen']['size'];
// echo "<br>";
// echo "File error : " . $_FILES['filen']['error'];
// echo "<br>";
// echo $_FILES['filen']['full_path'];
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="filen">
    <input type="submit">
</form>