<?php
// Database configuration
$dbHost     = "localhost:3307";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "hapimakii";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>