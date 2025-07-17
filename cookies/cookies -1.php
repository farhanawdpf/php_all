<!DOCTYPE html>
<?php
$value = "Hello world!";

// cookie will expire when the browser closes
setcookie("myCookie", $value);

// cookie will expire in 1 hour
setcookie("myCookie", $value, time()+3600);

// cookie will expire in 1 hour, and will only be available
// within the php directory + all sub-directories of php
setcookie("myCookie", $value, time()+3600, "/php/");
?> 
<html>
<body>
<p> 
    <pre> 
    setcookie() function to create a cookie named username and assign the value value John Carter to it. It also specify that the cookie will expire after 30 days (30 days * 24 hours * 60 min * 60 sec).
    </pre>
</p>

<?php
// Setting a cookie
setcookie("username", "isdb", time()+30*24*60*60);
?>
</body>
</html>
