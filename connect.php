<?php


	$dbhost = "localhost";
	$dbuser = "hfyeg2_esg";
	$dbpass = "Ges#0920";
	$db     = "hfyeg2_SAKILA";
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	
	if ($conn -> connect_error){
		echo " connection failed";
	}
?>