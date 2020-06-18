<?php

	$memID = $_REQUEST["memID"];
	$pass = $_REQUEST["pass"];
	
	echo $memID;
	echo "<br><br>";
	echo $pass;
	echo "<br><br>";
	
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
	
	
	if($res1 != "Tester")
	{
		die("Member is not a Tester");
	}
	else
	{
		if($pass == "pass2")
		{
			header('Location: tester.html');
			exit();
		}
	}
?>