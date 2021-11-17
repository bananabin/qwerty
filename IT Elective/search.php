<?php
include('./contrace.php');


?>
  <div id="form-container">
<?php

    
    $search = $_POST['date_search'];
    echo "<div id='table-scroll'>
            <table class='table table-striped'>
                <thead>
                     <tr>
                        <th scope='col'>Name</th>
                        <th scope='col'>Address</th>
                        <th scope='col'>Contact No.</th>
                        <th scope='col'>Email Address</th>
                        <th scope='col'>Q1</th>
                        <th scope='col'>Q2</th>
                        <th scope='col'>Q3</th>
                        <th scope='col'>Q4</th>
                        <th scope='col'>Q5</th>
                        <th scope='col'>Date</th>
                        <th scope='col'>Time</th>
                        </tr>
            </thead>";
                    
    
    $select = "SELECT ref_num, fname, lname, street_barangay, city_municipality, province, mobile_number, email, survey_date, TIME_FORMAT(survey_time, '%h:%i %p') as time, Q1, Q2, Q3, Q4, Q5, place FROM trace_table2 WHERE survey_date = '$search'";
    $result = @mysqli_query($con, $select);
    $found = mysqli_num_rows($result);
if($found>0)
{
    while($row = mysqli_fetch_array($result))
    {
       echo"<tr>";
       echo"<td>{$row['fname']} {$row['lname']}</td>";
       echo"<td>{$row['street_barangay']}, {$row['city_municipality']}, {$row['province']} </td>";
       echo"<td>{$row['mobile_number']}</td>";
       echo"<td>{$row['email']}</td>";
       echo"<td>{$row['Q1']}</td>";
       echo"<td>{$row['Q2']}</td>";
       echo"<td>{$row['Q3']}</td>";
       echo"<td>{$row['Q4']}</td>";
       echo"<td>{$row['Q5']}, {$row['place']}</td>";
       echo"<td>{$row['survey_date']}</td>"; 
       echo"<td style='font-size: 10pt; padding-top: 15px;'>{$row['time']}</td>";
    }

    echo "</table>";
    echo "</div>";
}
else
{
    echo'<script>alert("NO DATA FOUND!")</script>';
   // echo'<script> location.href="USER MANAGEMENT PAGE.html"</script>';
}

?>

</div>