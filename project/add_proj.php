<?php

	$name = $_REQUEST["projName"];
	
	$conn = mysqli_connect('localhost','root','','members');
	
	if(mysqli_connect_errno())
	{
		die("Connection Failed!!". mysqli_connect_error());
	}
	
	$sql = "CREATE TABLE `$name` (memID VARCHAR(20), PRIMARY KEY(memID))";
	
	$res = mysqli_query($conn,$sql);
	
	if(!$res)
	{
		die("Query failed ".mysqli_error($conn));
	}
	
	echo "Successful!!";

?>