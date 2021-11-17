<?php
include('./admin_table.php');

if(isset($_POST['add']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position']; 

$select = "SELECT username FROM admin_login WHERE username = '$username'";
$result = @mysqli_query($con, $select);
if(mysqli_num_rows($result) > 0)
{

    $response = "0"; 
}
else
{
    $query = "INSERT INTO admin_login(lname, fname, username, password, email, position) VALUE ('$firstname', '$lastname', '$username', '$password', '$email', '$position')";
    $result = @mysqli_query($con, $query);
    $response = "1"; 
}
echo json_encode($response);
exit();
}

if(isset($_POST['delete']))
{
    $username = $_POST['deleterow'];
    $select = "DELETE FROM admin_login WHERE username = '$username'";
    $result = @mysqli_query($con, $select);
    $response = "1";
    echo json_encode($response);
    exit();
}

if(isset($_POST['update']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $position = $_POST['position']; 
    $id = $_POST['id'];


            $update = "UPDATE admin_login SET fname = '$firstname', lname = '$lastname', email = '$email', username = '$username', password = '$password', position = '$position' WHERE id = '$id'";
            $result = @mysqli_query($con, $update);
            $response = "1";

    echo json_encode($response);
    exit();
}
?>