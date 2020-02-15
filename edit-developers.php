<?php
	$page_title = "Update developers";
	include "config/header.php";
	include "edit-developers-db.php";
	
	if(!isset($_GET["eid"]))
	{
		header("location: view-developers.php");
		exit;
	}
	
	$eid = $_GET["eid"];
	$qry = "select *from developers where id = $eid";
	$res = mysqli_query($mysqli,$qry);
	$row = mysqli_fetch_assoc($res);
	extract($row);
	
	if(isset($_SESSION["msg"]))
	{
		echo $_SESSION["msg"];
		unset($_SESSION["msg"]);
	}
?>
	<form method="post"  enctype="multipart/form-data" >
		<div class="row">
			<div class="col-md-4 offset-md-4"><br>
				<div class="text-right">
					<a href="view-developers.php" class="btn btn-primary">View</a>
				</div>
				
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" name="firstname"  class="form-control" value="<?php if(isset($firstname)){ echo $firstname; } ?>"  /><br/> 
				</div>
				
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" name="lastname"  class="form-control" value="<?php if(isset($lastname)){ echo $lastname; } ?>"  /><br/> 
				</div>
				
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email"  class="form-control" value="<?php if(isset($email)){ echo $email; } ?>"  /><br/> 
				</div>
				
				<div class="form-group">
					<label>Number</label>
					<input type="text" name="number" pattern="[789][0-9]{9}"  class="form-control" value="<?php if(isset($number)){ echo $number; } ?>"  /><br/> 
				</div>
				
				<div class="form-group">
					<label>Avatar</label>
					<input type="file" name="avatar"   class="form-control" />
					<img src="upload/<?php echo $avatar; ?>" width="100px" height="100px" />
					<input type="hidden" name="avatar" value="<?php echo $row['avatar'];?>"/>

				</div>
		
		
		
		
		
		
		<input type="submit" name="edit" class="btn btn-primary" value="Update Developers" />
		<input type="reset" name="reset" class="btn btn-danger" value="cancel" />
	</form>

<?php 
	include "config/footer.php";
?>