<?php 
// setcookie(name,value,expire,path,domain,secure,httponly)
// cookie add:
setcookie('pname','This is a main page.',time()+20000,'/');
echo $_COOKIE['pname'];

?>
