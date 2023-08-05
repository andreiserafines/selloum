<?php
	
	$con = mysqli_connect('127.0.0.1','root','');

	if (!$con)
	{
		echo 'Not Connected To Server';
	}

	if(!mysqli_select_db($con,'user_db'))
	{
		echo'Database Not Selected';
	}

if(isset($_POST['Username'])  || isset($_POST['Email']) || isset($_POST['Password']))
{


	
	$Username = $_POST['Username'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];


	$sql = "INSERT INTO user_tbl (Username,Email,Password) VALUES ('$Username','$Email','$Password')";

	if (!mysqli_query($con,$sql))
	{
		echo 'not inserted';
	}
	else
	{
		header("location:Account.html");
	}
}	
?>