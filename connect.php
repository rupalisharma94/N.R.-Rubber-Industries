<?php
$servername = "localhost";
$username = "rubber";
$password = "&cNBZcwrJT,2";
$database ="rubber";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>