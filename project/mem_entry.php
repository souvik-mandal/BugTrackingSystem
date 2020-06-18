<?php

	$memID = $_REQUEST["memberID"];
	$fname = $_REQUEST["firstName"];
	$lname = $_REQUEST["lastName"];
	$desig = $_REQUEST["desig"];
	
	echo "Member ID : ".$memID;
	echo "<br><br>";
	echo "Name : ".$fname." ".$lname;
	echo "<br><br>"; 
	echo "Designation : ".$desig;
	echo "<br><br>";
	
	$conn = mysqli_connect('localhost', 'root', '', 'members');
	
	if(mysqli_connect_errno())
	{
		die("Connection Failed!!". mysqli_connect_error());
	}
	
	$sql = "INSERT INTO member_list VALUES('$memID','$fname','$lname','$desig')";
	
	$res = mysqli_query($conn,$sql);
	
	if(!$res)
	{
		die("Query failed ".mysqli_error($conn));
	}
	else
	{
		echo "Successful!!";
	}
	
?>