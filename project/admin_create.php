<?php

	$adminNam = $_REQUEST["adminName"];
	$adminUse = $_REQUEST["adminUser"];
	$adminPas = $_REQUEST["adminPass"];
	
	echo "Name : ".$adminNam;
	echo "<br><br>";
	echo "Username : ".$adminUse;
	echo "<br><br>";
	echo "Password : ".$adminPas;
	
	$conn = mysqli_connect('localhost', 'root', '', 'members');
	
	if(mysqli_connect_errno())
	{
		die("Connection Failed!!". mysqli_connect_error());
	}
	
	$sql = "INSERT INTO admin VALUES('$adminNam','$adminUse','$adminPas')";
	
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