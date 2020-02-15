<?php
	
	if(isset($_GET["did"]))
	{
		
		$qry = "delete from developers  where id = ".$_GET["did"];
		$res = mysqli_query($mysqli,$qry);
		if($res)
		{
			$_SESSION["msg"] = "<span style='color:green;'>Delete developers successfully.</span>";
		}
		else
		{
			$_SESSION["msg"] = "<span style='color:red;'>Delete developers not successfully.</span>";
		}
		header("location: view-developers.php");
		exit;
	}
	
	
?>