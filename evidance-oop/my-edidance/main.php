<?php
require_once("myclass.php");
if(isset($_POST["btnSubmit"])){
    $trainID = $_POST['txtId'];
    $trainName =$_POST['txtName'];
    // create a object 
    $munna = new Trainee($trainID,$trainName);
    $munna->save();
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form action="#" method="post">
	<div>
	ID:<br/>
	<input type="text" name="txtId" />
	</div>
	<div>
	Name<br/>
	<input type="text" name="txtName" />
	</div>
	<div>
	<input type="submit" name="btnSubmit" value="Submit" />
	</div>
</form>
<?php
Trainee::display();
?>
</body>
</html>