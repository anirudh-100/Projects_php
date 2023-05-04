<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['save'])){
		$parent = $_POST['parent'];
		$children = $_POST['children'];
 
		$childrens=implode(', ', $children);
 
		mysqli_query($conn, "INSERT INTO `member` VALUES('', '$parent', '$childrens')") or die(mysqli_error());
 
 
		header("location: index.php");
	}
?>