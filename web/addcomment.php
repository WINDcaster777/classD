<?php
require ('connector.php');
if (isset($_POST[''])||isset($_POST['email'])){
	$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		$sql="INSERT INTO guestbook(name,email,message) VALUES('$name','$email','$message')";
		if (!mysqli_query($con,$sql))
		{
			die('Error: ' . mysqli_error($con));
		}
		else{
			echo "thank you";
	}
		mysqli_close($con);
	}
?>
