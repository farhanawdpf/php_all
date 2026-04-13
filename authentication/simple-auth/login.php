<?php
if (isset($_POST['login'])) {
    $user = $_POST["username"];
    $p = $_POST["pass"];
    if ($user == "admin" && $p == "123") {
        echo "Successfully Login";
        header('location:main.php');
    } else {
        echo "invalid user or password";
    }
}


?>


<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="pass"><br><br>

    <input type="submit" name="login" value="Login">
</form>