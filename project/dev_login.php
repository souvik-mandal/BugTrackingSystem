<?php

	$memID = $_REQUEST["memID"];
	$pass = $_REQUEST["pass"];
	
	
	$conn = mysqli_connect('localhost','root','','members');
	
	if(mysqli_connect_errno())
	{
		die("Connection Failed! ".mysqli_connect_error());
	}
	
	$sql1 = "SELECT desig FROM member_list WHERE member_ID='$memID'";
		
	$res = mysqli_query($conn,$sql1);
	$row = $res->fetch_assoc();
	$res1 = $row["desig"];
	echo "<br><br>";
		
	if(!$res)
	{
		die("Query failed ".mysqli_error($conn));
	}
	
	
	if($res1 != "Developer")
	{
		die("Member is not a Developer");
	}
	else
	{
		if($pass == "pass1")
		{
			header('Location: dev.html');
			exit();
		}
	}
?>