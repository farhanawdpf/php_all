<!-- PHP md5(), sha1(), hash() Functions,base64_encode,base64_decode -->

<?php 
$password = "admin";
//md5()
$m = md5($password);
echo $m;
echo "<br>";
echo strlen($m);

echo "<br>";
//sha1(),
$m = sha1($password);
echo $m;
echo "<br>";
echo strlen($m);


echo "<br>";
//hash()
$m = hash('sha1','this is admin');
echo $m;
echo "<br>";
echo strlen($m);



echo "<br>";
//base64_encode(),
$m = base64_encode($password);
echo $m;
echo "<br>";
echo strlen($m);


echo "<br>";
 echo base64_decode("YWRtaW4=");

?>

