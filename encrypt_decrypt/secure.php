<!-- <!-- PHP md5() ->convart to 128-bit hash
 , sha1() ->convart 160-bit hash,
  -->

<?php
$password = "123";
//md5()
echo md5($password);
echo "<br>";

echo hash('SHA512', "admin@");



?>