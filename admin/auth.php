<?php
$urname = $_POST['urname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$con = mysqli_connect('localhost', 'rubber', '&cNBZcwrJT,2', 'rubber');
//to prevent from mysqli injection
$urname = stripcslashes($urname);
$email = stripcslashes($email);
$pass = stripcslashes($pass);
$urname = mysqli_real_escape_string($con, $urname);
$email = mysqli_real_escape_string($con, $email);
$pass = mysqli_real_escape_string($con, $pass);

$sql = "select *from details where urname = '$urname' and email = '$email' and pass = '$pass'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1)
{
    
    // echo "<h1> LOGIN SUCCESSFULL <h1>";
    header("location:dashboard.php");
}
else
{
    // echo "<h1> Login failed.Invalid username or password.</h1>";
    header("location:401.html");

}
?>