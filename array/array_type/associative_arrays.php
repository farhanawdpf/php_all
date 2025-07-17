
<?php
   $arr1 = array("a"=>10, "b"=>20, "c"=>30, "d"=>40);
   foreach ($arr1 as $k=>$v){
      $arr2[$k] = $v*2 ." <br>";
   }
   print_r($arr2);

echo "<br>";

   $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
echo "<br>";
 print_r($car);
?>