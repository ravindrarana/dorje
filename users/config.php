<?php
$servername = "localhost";
	$username = "root";
	$password = "whoami";
	$dbname = "smartghar";
	// Create Connection 
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check Connection
	if($conn->connect_error)
	{
		die("Connection Error" .$conn->connect_error);
	}
	else
	{
		// echo "Success";
	}
?>