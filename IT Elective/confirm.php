<?php
include('./contrace.php');

$id = $_POST['reference'];
    


            $update = "UPDATE trace_table SET survey_time = CURTIME() WHERE ref_num = '$id'";
            $result = @mysqli_query($con, $update);
            $query = "INSERT trace_table2 SELECT * FROM trace_table WHERE ref_num = '$id'";
            $insert = @mysqli_query($con, $query);
            $select = "SELECT fname, lname, TIME_FORMAT(survey_time, '%h:%i %p') as time FROM trace_table WHERE ref_num = '$id'";
            $retrieve = @mysqli_query($con, $select);
            $row = mysqli_fetch_assoc($retrieve);
            $name = "Client Name: {$row['fname']} {$row['lname']} \n";
            $date = "Time: {$row['time']}";
        echo $name;
        echo $date;
    exit();
?>