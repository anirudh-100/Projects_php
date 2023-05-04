<?php
	$conn=mysqli_connect('localhost', 'root', '', 'db_multiple_input');
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>