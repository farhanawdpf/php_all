<head>
<title>Separate Positive &amp; Negative numbers in an Array in PHP</title>
</head>
<body>
	
	<h3>PHP Program to Separate Positive &amp; Negative </h3>
	Enter the Numbers separated by Commas <br />
	(eg: 12,-23,56,-14,-25,10)
	<br /><br />
	<form method="post">
		<input type="text" name="numbers"/>
		<button type="submit">Separate</button>
	</form>
</body>
</html>
 
<?php 
	
	if($_POST)
	{
		//get the post value from form
		$numbers = $_POST['numbers'];
		
		if($numbers != ''){
			//separate the numbers and make into array
			$numArray = explode(',', $numbers);
			
			//now this array has both positive and negative integers
			//let's separate it
			foreach($numArray as $num){
				if($num > 0){
					$positiveArr[] = $num;
				}else{
					$negativeArr[] = $num;
				}
			}
 
			print "Positive Values: ". print_r($positiveArr,true)."<br>";
			print "Negative Values: ". print_r($negativeArr,true);
		}
	}
 
?>