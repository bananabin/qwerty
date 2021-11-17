<?php
session_start();
include('./admin.php');

$username = $_POST["username"];
$password = $_POST["password"];

$select = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password'";
$result = @mysqli_query($con, $select);
if(mysqli_num_rows($result) == 1)
{
    $_SESSION['login'] = "true";
    //header("location:HOMEPAGE.php"); 
    $data = '1';
}

echo json_decode($data);
?>