<!-- <!-- PHP md5() ->convart to 128-bit hash
 , sha1() ->convart 160-bit hash,
  -->

<?php
// $password = "123";
// //md5()
// echo md5($password);
// echo "<br>";

// echo hash('SHA512', "admin@");
// echo "<br>";
// echo hash('SHA256', "admin");
// echo "<br>";
// echo hash('SHA384', "admin123");
// echo "<br>";
// echo hash('SHA224', $password);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// $pass = "admin";
// $v = password_hash($pass, PASSWORD_DEFAULT);
// echo "<br>";
// echo "<br>";
// if (password_verify($pass, $v)) {
//   echo "valid";
// } else {
//   echo "invalid";
// }

// base64_encode
// base64_decode() 

// $store = "1234";

// echo base64_encode($store);

// echo base64_decode("MTIzNA==");

// echo "<br>";
// $data = "Hello World";
// $key = "secret";
// $method = "AES-128-CTR";

$source = 'It works !';

$iv = "1234567812345678";
$pass = '1234567812345678';
$method = 'aes-128-cbc';


// echo base64_encode("iv");
// Encrypt
$encrypted = openssl_encrypt($source, $method, $pass, true, $iv);

// Decrypt
$decrypted = openssl_decrypt($encrypted, $method, $pass, true, $iv);


echo "Encrypted: " . $encrypted . "<br>";
echo "Decrypted: " . $decrypted;
?>