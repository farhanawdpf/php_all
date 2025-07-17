<?php 
$db = mysqli_connect('localhost','root','','new_database');
if (isset($_GET['deleteid'])){ 
    $delete_id = $_GET['deleteid'];
     $sql = "DELETE FROM  users WHERE id = $delete_id";
     if(mysqli_query($db, $sql) == TRUE){ 
        header('location:view.php');
     }
}
?>
  <div class="container"> 
    <div class="row"> 
    <p>
     <a href="insert.php">Add New Data</a>
    </p>
        <div class="col-sm-1"></div>
        <div class="col-sm-10 pt-4 mt-4 border border-success"> 
           
            <h3 class="text-center p-2 m-2 bg-success text-white">User Information</h3>
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
					<a href='view.php?deleteid=$_id'>
						Delete
					</a>
					</td>
				</tr>";
		}
	
	?>
</table>



</div>
        <div class="col-sm-1"></div>
    </div>
   </div>

