<?php

	$name = $_REQUEST["Name"];
	$prod = $_REQUEST["prod"];
	$comp = $_REQUEST["comp"];
	$stat = $_REQUEST["stat"];
	$sever = $_REQUEST["sever"];
	$prior = $_REQUEST["prior"];
	$date = $_REQUEST["Date"];
	$time = $_REQUEST["Time"];	
	
	$conn = mysqli_connect('localhost','root','','members');
	
	if(mysqli_connect_errno())
	{
		die("Connection Failed!".mysqli_connect_error());
	}
	
	$sql = "INSERT INTO bug VALUES('$name','$prod','$comp','$stat','$sever','$prior','$date', '$time')";
	
	$res = mysqli_query($conn,$sql);
	
	if(!$res)
	{
		die("Query Failed! ".mysqli_error($conn));
	}
	
	echo "Entry Successful!";

?>