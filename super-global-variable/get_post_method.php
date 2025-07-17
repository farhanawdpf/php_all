<?php 
echo $_GET['fname'];
?>

<form action="<?php $_SERVER['PHP_SELF']?>" method="POST"> 
        <input type="text" name="fname">
        <input type="submit" value="submit">
</form>

<?php 
$prompt_massage="plese enter your name";

$r=prompt($prompt_massage);
echo $r;

?>