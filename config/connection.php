<?php 
	if(session_id() === "")
	{
		session_start();
	}
	$mysqli = mysqli_connect("localhost","root","","crud");
?>