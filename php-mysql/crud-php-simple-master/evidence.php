<?php 
$db = mysqli_connect('localhost','root','','new_database');
if (isset($_GET['deleteid'])){ 
    $delete_id = $_GET['deleteid'];

     $sql = "DELETE FROM  users WHERE id = $delete_id";
     if(mysqli_query($db, $sql) == TRUE){ 
        header('location:evidence.php');
     }
}
?>

<table border="1" style="border-collapse: collapse;" > 
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>email</th>
		<th>Action</th>
	
	</tr>
	<?php 
		$users = $db->query("select * from users");
		while(list($_id,$_name,$_email) = $users->fetch_row()){
			echo "<tr> 
					<td>$_id</td>
					<td>$_name</td>
					<td>$_email</td>
					<td> 
					<a href='evidence.php?deleteid=$_id'>
						Delete
					</a>
					</td>
				</tr>";
		}
	
	?>
</table>





