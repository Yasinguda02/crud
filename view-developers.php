<?php
	$page_title = "View developers";
	include "config/header.php";
	include "view-developers-db.php";
		
	if(isset($_SESSION["msg"]))
	{
		echo $_SESSION["msg"];
		unset($_SESSION["msg"]);
	}
	
	$qry = "select *from developers";
	$res = mysqli_query($mysqli,$qry);
	
?>
<a href="add-developers.php" class="btn btn-success">Add</a>
	<table class="table" cellpadding="10px" cellspacing="0px" border="1px">
	<thead>
		<tr>
			<th scope="col">Sr No</th>
			<th scope="col">Firstname</th>
			<th scope="col">Lastname</th>
			<th scope="col">Email</th>
			<th scope="col">Number</th>
			<th scope="col">Avatar</th>
			<th scope="col">Action</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$i = 1;
		while($row = mysqli_fetch_assoc($res))
		{
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row["firstname"]; ?></td>
			<td><?php echo $row["lastname"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["number"]; ?></td>
			<td><img src="upload/<?php echo $row["avatar"]; ?>" width="100px" height="100px" /></td>
			<td>
				<a href="edit-developers.php?eid=<?php echo $row["id"]; ?>" class="btn btn-primary">Edit</a> |
				<a href="view-developers.php?did=<?php echo $row["id"]; ?>"
				onclick="javascript: return confirm('Are you sure delete this record ?');" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		<?php
		$i++;
		}
		?>
	</table>
<?php 
	include "config/footer.php";
?>
