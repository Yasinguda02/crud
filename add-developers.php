<?php
	$page_title = "Add developers";
	include "config/header.php";
	include "add-developers-db.php";
	
	if(isset($_SESSION["msg"]))
	{
		echo $_SESSION["msg"];
		unset($_SESSION["msg"]);
	}
?>
	<form method="post" enctype="multipart/form-data"  >
		<div class="row">
			<div class="col-md-4 offset-md-4"><br>
				<div class="text-right">
					<a href="view-developers.php" class="btn btn-primary">View</a>
				</div>
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" name="firstname" class="form-control" placeholder="Enter Firstname" maxlength="200"    />
				</div>
				
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" name="lastname" class="form-control" placeholder="Enter Lastname" maxlength="200"    />
				</div>
				
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="Enter email" maxlength="100"    />
				</div>
				
				<div class="form-group">
					<label>Number</label>
					<input type="text" name="number" pattern="[789][0-9]{9}" class="form-control" placeholder="Enter number"   />
				</div>
				
				<div class="form-group">
					<label>Avatar</label>
					<input type="file" name="avatar" class="form-control"   />
				</div>
				
				 
				<input type="submit" name="add" class="btn btn-primary" value="Add Developers" />
				<input type="reset" name="reset" class="btn btn-danger" value="cancel" />
			</div>
		</div>
	</form>

<?php 
	include "config/footer.php";
?>