<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "admin";
$event = "SET GLOBAL event_scheduler = ON";

// Create connection
$con = new mysqli($servername, $username, $password, $db);

$scheduler = @mysqli_query($con, $event);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>