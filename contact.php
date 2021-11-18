<?php
// database connection code
if(isset($_POST))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'rubber', '&cNBZcwrJT,2', 'rubber');

// get the post records
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];


// database insert SQL code
$sql = "INSERT INTO `contact` (`fname`, `lname`, `phone`, `email`, `subject`) VALUES ('$fname', '$lname', '$phone', '$email', '$subject')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script>alert("Your request has been submitted succesfully")</script>';
	// header("location: index.html");
}
}

else
{
	echo '<script>alert("Failed to update your request")</script>';
	
}
