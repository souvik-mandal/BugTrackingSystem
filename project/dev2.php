<?php

	$name = $_REQUEST["bug"];
	
	$conn = mysqli_connect('localhost','root','','members');
	
	if(mysqli_connect_errno())
	{
		die("Connection Failed! ".mysqli_connect_error());
	}
	
	$chec = "SELECT IF(COUNT(*) >0, TRUE,FALSE)as response FROM bug WHERE name='$name'";
	
	$res1 = mysqli_query($conn,$chec);
	$data = mysqli_fetch_assoc($res1);
	$res2 = $data['response'];
	
	if($res2 == '0')
	{
		echo "Invalid Bug!!";
		exit();
	}
	
	$sql = "DELETE FROM bug WHERE name = '$name'";
	
	$res = mysqli_query($conn,$sql);
	
	if(!$res)
	{
		die("Query failed ".mysqli_error($conn));
	}
	
	echo "Bug Deleted!!";

?>