<?php
	
	$server		= "localhost"; 
	$user		= "id3099731_jogjamedianet"; 
	$password	= "gombong123"; 
	$database	= "id3099731_jogjamedianet"; 
	
	 $con = mysqli_connect($server, $user, $password, $database);
	 if (mysqli_connect_errno()) {
	 	echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	 }
?>