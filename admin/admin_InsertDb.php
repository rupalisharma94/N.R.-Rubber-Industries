<?php
// database connection code
if(isset($_POST))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'rubber', '&cNBZcwrJT,2', 'rubber');

// get the post records
$urname=$_POST['urname'];
$email=$_POST['email'];
$pass = $_POST['pass'];


// database insert SQL code
$sql = "INSERT INTO `details` (`urname`, `email`, `pass`) VALUES ('$urname', '$email', '$pass')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script>alert("Your request has been submitted succesfully")</script>';
	header("location:index.html");
}
}

else
{
	echo '<script>alert("Failed to update your request")</script>';
	
}
