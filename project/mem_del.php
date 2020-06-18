<?php

	$memID = $_REQUEST["memID"];
	
	$conn = mysqli_connect('localhost', 'root', '', 'members');
	
	if(mysqli_connect_errno())
	{
		die("Connection Failed!!". mysqli_connect_error());
	}
	
	$chec = "SELECT IF(COUNT(*) >0, TRUE,FALSE)as response FROM member_list WHERE member_ID='$memID'";
	
	$res1 = mysqli_query($conn,$chec);
	$data = mysqli_fetch_assoc($res1);
	$res2 = $data['response'];
	
	if($res2 == '0')
	{
		echo "Invalid Member ID !!";
		exit();
	}
	
	$sql= "DELETE FROM member_list WHERE member_ID = '$memID'";
	
	$res = mysqli_query($conn,$sql);
	
	if(!$res)
	{
		die("Query failed ".mysqli_error($conn));
	}
	
	echo "Member Deleted!!";
	
?>