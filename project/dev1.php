<?php

	$conn = mysqli_connect('localhost','root','','members');
	
	if(mysqli_connect_errno())
	{
		die("Connection Failed!".mysqli_connect_error());
	}
	
	$sql = "SELECT * FROM bug";
	 
	$res = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_assoc($res))
		{
			echo "Name: ".$row["name"] ." product: ".$row["product"] ." component: ".$row["product"] ." status: ".$row["status"] ." severity: ".$row["severity"] ." priority: ".$row["priority"] ." Date: ".$row["Date"] ." Time: ".$row["Time"] ."<br>";
		}
	}
	else
	{
		echo "0 results";
	}

?>