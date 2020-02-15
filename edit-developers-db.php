<?php
	
	if(isset($_POST["edit"]))
	{
		
		$firstname = $_POST["firstname"];  
		$lastname = $_POST["lastname"];  
		$email = $_POST["email"];  
		$number = $_POST["number"];  
		if($_FILES["avatar"]["name"] != "")
		{
			$avatar = time()."_".$_FILES["avatar"]["name"];
			move_uploaded_file($_FILES["avatar"]["tmp_name"],"upload/$avatar"); 
		}
		else
		{
			if(isset($_POST["avatar"]))
			{
				$avatar =  $_POST["avatar"];
			}
		}
		
		$qry = "update developers set firstname = '$firstname',  lastname = '$lastname',  email = '$email',  number = '$number',  avatar = '$avatar' where id = ".$_GET["eid"];
		$res = mysqli_query($mysqli,$qry);
		if($res)
		{
			$_SESSION["msg"] = "<span style='color:green;'>Update developers successfully.</span>";
		}
		else
		{
			$_SESSION["msg"] = "<span style='color:red;'>Update developers not successfully.</span>";
		}
		header("location: edit-developers.php?eid=".$_GET["eid"]);
		exit;
	}
	
	
?>