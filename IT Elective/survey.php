<?php
include('./contrace.php');

if(isset($_POST['insert']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$province = $_POST['province'];
$mobile = $_POST['mobile']; 
$email = $_POST['email'];

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$place = $_POST['place'];

//$select = "SELECT username FROM manage WHERE username = '$username'";

    $info = "INSERT INTO trace_table(fname, lname, street_barangay, city_municipality, province, mobile_number, email, survey_date, survey_time, Q1, Q2, Q3, Q4, Q5, place) VALUE ('$firstname', '$lastname', '$barangay', '$city', '$province', '$mobile', '$email', CURDATE(), CURTIME(), '$q1', '$q2', '$q3', '$q4', '$q5', '$place')";
    
    
    /*$select = "SELECT LAST_INSERT_ID() FROM user_info";
    $resultid = @mysqli_query($con, $select);

    $row = mysqli_fetch_assoc($resultid)

    echo"<h6>{$row['user_id']}</h6>";*/

    if (mysqli_query($con, $info)) {
        $last_id = mysqli_insert_id($con);
        echo $last_id;
      } 
      else
       {
        echo "Error: " . $info . "<br>" . mysqli_error($con);
      }
    
}
exit()

?>

