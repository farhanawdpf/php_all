1.local
2.global
3.static

List of PHP Superglobals
Here is a list of the most commonly used PHP superglobals:

$GLOBALS
$_SERVER
$_REQUEST
$_GET
$_POST
$_SESSION
$_COOKIE
$_FILES
$_ENV


The $_GET Syntax
<?php
//Displays the data that was received from the input box named name in the form
	($_GET['form name goes here'])
?>

<?php
echo "Name: " . $_GET['name'];  
echo "Age: " . $_GET['age'];    
?>
------------
$_POST
What is it?
The $_POST variable is also used to collect data from forms, but the $_POST is slightly different because in $_GET it displayed the data in the url and $_POST does not. 
<?php

//Displays the data that was received from the input box named name in the form
 echo ($_POST['name']);
?>	
The $_POST syntax
<?php
//The $_POST gets the data from the form 
	($_POST['form name goes here'])
?>
	
//This is the html form that creates the input box and submit button
//The method for the form is in the line below		
<form action="test.php" method=POST>
 	Name:<br><input type="text" name="name"><br>
 	<input type="submit" value="Submit">
 </form>
// HTML Form
<form method="post" action="process.php">
    <input type="text" name="username" />
    <input type="password" name="password" />
    <input type="submit" value="Submit" />
</form>

// process.php
<?php
echo "Username: " . $_POST['username'];
echo "Password: " . $_POST['password'];
?>

<?php
   echo "PHP Version: " . $_ENV['PHP_VERSION'];  // Output: 7.4.3

?>


<html>
<body>
$_REQUEST
What is it?
The $_REQUEST variable is a variable with the contents of $_GET and $_POST and $_COOKIE variables.
<form method="post" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>
</html>

$name = $_REQUEST['fname'];
echo $name;

Using GET for the method
<?php
//Displays the data that was received from the input box named name in the form
	echo ($_REQUEST['name']);
 ?>
 
 //This is the html form that creates the input box and submit button
 //The method for the form is in the line below
 <form action="test.php" method=GET>
 	Name:<br><input type="text" name="name"><br>
 	<input type="submit" value="Submit">
 </form>
--------------------------------------xxxx----------------------------------------------------------------------



constant
define(name, value);

define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // outputs "cat"
?>