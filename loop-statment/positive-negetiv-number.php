<?php 
 
$n=array(2,-1,-5,9,10,0);
//now loop through the array and separate
foreach($n as $num){
   if($num > 0){
      $positive[] = $num;
   }
   if($num < 0){
      $negative[] = $num;
   }
   if ($num ===0){ 
    $zero[] = $num;
   }
}
echo "Positive Number: ";
print_r($positive);
echo "<br>";
echo "Negetive Number: ";
print_r($negative);
echo "<br>";
echo "Zero Number: ";
print_r($zero);

?>