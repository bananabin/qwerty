<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "admin";

// Create connection
$con = new mysqli($servername, $username, $password, $db);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>