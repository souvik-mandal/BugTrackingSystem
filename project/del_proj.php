<?php

	$name = $_REQUEST["projName"];
	
	echo $name;
	echo "<br><br>";
	
	$conn = mysqli_connect('localhost','root','','members');
	
	if(mysqli_connect_errno())
	{
		die("Connection Failed! ".mysqli_connect_error());
	}
	
	$sql2 = "DROP TABLE `$name`";
	
	$res2 = mysqli_query($conn,$sql2);
	
	if(!$res2)
	{
		die("Query Failed! ".mysqli_error($conn));
	}
	
	echo "Project Deleted!";

?>