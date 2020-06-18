<?php

	$inputUser = $_REQUEST["user"];
	$inputPass = $_REQUEST["pass"];
	
	if($inputUser == "admin")
	{
		if($inputPass == "pass")
		{
			header('Location: admin.html');
			exit;
		}
		else
		{
			echo "Incorrect password";
		}
	}
	else
	{
		echo "Incorrect username";
	}

?>