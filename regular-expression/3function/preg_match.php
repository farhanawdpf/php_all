<?php
// preg_match(pattern, input, matches, flags, offset)

// preg_match(pattern, input, matches)
$str = "Returns a new string where matched patterns have been replaced with another string ";
$p = "/ String /i";


echo preg_match($p, $str);
?>

<?php
$name = "Lucky";

if (preg_match("/^[a-zA-Z]+$/", $name)) {
    echo "Only Alphabet";
} else {
    echo "Not Only Alphabet";
}
?>


<?php
$phone = "01712345678";

if (preg_match("/^01[3-9][0-9]{8}$/", $phone)) {
    echo "Valid Number";
} else {
    echo "Invalid Number";
}
?>


<!-- Remove Extra Space -->
<?php
$text = "Hello     World   PHP";

echo preg_replace("/\s+/", " ", $text);
?>

<!-- Email Validation -->
<?php
$email = "user@gmail.com";

if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
    echo "Valid Email";
} else {
    echo "Invalid Email";
}
?>


<!-- Password Validation -->

<!-- Condition -->
<!-- 
Password must contain

1 uppercase
1 lowercase
1 number
minimum 6 characters
Solution -->
<?php
$password = "Test123";

if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$/", $password)) {
    echo "Strong Password";
} else {
    echo "Weak Password";
}
?>