<!-- PHP md5(), sha1(), hash() Functions,base64_encode,base64_decode -->

<?php 
$n="123";
echo md5($n);
echo "<br>";
// See the password_hash() example to see where this came from.

$plaintext_password = "Password@123";


$hash ="$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm";


$verify = password_verify($plaintext_password, $hash);


if ($verify) {
	echo 'Password Verified!';
} else {
	echo 'Incorrect Password!';
}
echo "<br>";


// $password = '202cb962ac59075b964b07152d234b70';
// $hashedPassword = Hash::check($password);
// echo $hashedPassword;

// base64_encode
// PHP | base64_encode() Function
// The base64_encode() function is an inbuilt function in PHP that is used to encode data with MIME base64. MIME (Multipurpose Internet Mail Extensions) base64 is used to encode the string in base64. The base64_encoded data takes 33% more space than the original data. 

// Syntax:

// string base64_encode( $data )

$str = 'This is an encoded string';
echo base64_encode($str);


echo "<br>";
echo "<br>";
// base64_decode() 
// The base64_decode() is an inbuilt function in PHP which is used to Decodes data which is encoded in MIME base64.
// Syntax: 
 

// string base64_decode( $data, $strict )

$str = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==';
echo base64_decode($str);

echo "<br>";
echo "<br>";

$str = "Hello";
$r= base64_encode($str);
$r= md5($str);
$r= sha1($str);
echo $r;
echo "<br>";
echo strlen($r);
echo "<br>";
echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');//at least 2 arguments 
?>

