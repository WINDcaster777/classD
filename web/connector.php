<?php
	$server="localhost"; //Add your SQL Server host here
	$user="root"; //SQL Username
	$pass=""; //SQL Password
	$dbname="guestbook"; //SQL Database Name
	$con=mysqli_connect($server,$user,$pass,$dbname);
	if(!$con)
	{
		echo "Failed to connect to MySQL: ";
	}

    ?>