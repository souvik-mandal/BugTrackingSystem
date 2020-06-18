<?php

	$Name = $_REQUEST["Name"];
	$memID = $_REQUEST["memID"];
	
	$conn = mysqli_connect('localhost','root','','members');
	
	if(mysqli_connect_errno())
	{
		die("Connection Failed!".mysqli_connect_error());
	}
	
	$sql = "INSERT INTO `$Name` VALUES('$memID')";
	
	$res = mysqli_query($conn,$sql);
	
	if(!$res)
	{
		die("Query Failed! ".mysqli_error($conn));
	}
	
	echo "Assignment Successful!!";

?>