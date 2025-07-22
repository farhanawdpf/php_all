<h1>
	<pre>
mysql_fetch_array() - Fetch a result row as an associative array, a numeric array, or both
mysql_fetch_assoc() - Fetch a result row as an associative array
mysql_fetch_object() - Fetch a result row as an object
mysql_data_seek() - Move internal result pointer
mysql_fetch_lengths() - Get the length of each output in a result
mysql_result() - Get result data
	</pre>
</h1>




<?php
$db = mysqli_connect('localhost', 'root', '', 'crud-one');
?>
<div>
			<h3>User Information</h3>
			<p>
     			<a href="insert.php">Add New Data</a>
    		</p>
			<table border="1" style="border-collapse: collapse;">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Age</th>
					<th>Email</th>
					<th>Contact</th>
				</tr>
				<?php
				$users = $db->query("select * from users");
				while(list($_id,$_name,$_age,$_email,$contact) = $users->fetch_row()){
					echo "<tr> 
							<td>$_id</td>
							<td>$_name</td>
							<td>$_age</td>
							<td>$_email</td>
							<td>$contact</td>
							
						</tr>";
				}
				?>
			</table>



</div>