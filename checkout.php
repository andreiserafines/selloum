<?php
$con = mysqli_connect("localhost","root","","user_db");

if($con === false)
{
	die("Error".mysqli_connect_error());
}

 $name=$_POST['name'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $cardname=$_POST['cardname'];
 $cardnumber=$_POST['cardnumber'];
 $expmonth=$_POST['expmonth'];
 $state=$_POST['state'];
 $zip=$_POST['zip'];
 $expyear=$_POST['expyear'];

 $sql = "INSERT INTO checkout_tbl (name,email,address,city,cardname,cardnumber,expmonth,state,zip,expyear) VALUES ('$name', '$email', '$address', '$city', '$cardname', '$cardnumber', '$expmonth', '$state', '$zip', $expyear')";

 if(mysqli_query($con,$sql))
 {
 	echo "Data  inserted" ;
 	sleep(3);
	header("Location:http://localhost/E%20commerce%20web/products.html") ;
	
 }
 else
 {
 	echo "Data not inserted";	
 }
 
mysqli_close($con);
?>