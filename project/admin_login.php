<?php

		$adminUser = $_REQUEST["adminUsername"];
		$inputPass = $_REQUEST["inputPass"];
		
		$conn = mysqli_connect('localhost','root','','members');
		
		if(mysqli_connect_errno())
		{
			die("Connection Failed!!". mysqli_connect_error());
		}
		
		$sql1 = "SELECT adminPass FROM admin WHERE adminUser='$adminUser'";
		
		$res = mysqli_query($conn,$sql1);
		$row = $res->fetch_assoc();
		$res1 = $row["adminPass"];
		echo "<br><br>";
		
		if(!$res)
		{
			die("Query failed ".mysqli_error($conn));
		}
		else
		{
			echo "Successful!!";	
		}
		
		
		
		if($inputPass == $res1)
		{
			header('Location: mem_entry.html');
			exit();
		}
		else
		{
			echo "incorrect input";
		}

?> 