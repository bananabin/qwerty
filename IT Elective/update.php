<?php
include('./contrace.php');


?>

<?php

    
    $id = $_POST['reference'];
                    
    
    $select = "SELECT * FROM trace_table WHERE ref_num = '$id'";
    $result = @mysqli_query($con, $select);
   
    $found = mysqli_num_rows($result);
if($found>0)
{
    while($row = mysqli_fetch_array($result))
    {
        echo"<form>";
        echo"<div class='form-group'>";
        echo"<label class='font-weight-bold'>Name:</label>";
        echo"<input  type='text' readonly class='searchTerm text-dark' value='{$row["fname"]} {$row["lname"]}'>";
        echo"</div>";
        echo"<div class='form-group'>";
        echo"<label class='font-weight-bold'>Address:</label>";
        echo"<input type='text' readonly class='searchTerm text-dark' value='{$row["street_barangay"]}, {$row["city_municipality"]}, {$row["province"]}'>";
        echo"</div>";
        echo" <div class='form-row'>";
        echo"<div class='col'>";
        echo"<label class='font-weight-bold'>Mobile Number:</label>";
        echo"<input type='text' readonly class='searchTerm text-dark' value='{$row["mobile_number"]}'>";
        echo"</div>";
        echo"<div class='col'>";
        echo"<label class='font-weight-bold'>Email:</label>";
        echo"<input type='text' readonly class='searchTerm text-dark' value='{$row["email"]}'>";
        echo"</div>";
        echo"</div>";
        echo"</form>";
        echo"<div class='text-center'><button type='button' class='update mt-3' id='btnUpdate'>Confirm Entry</button></div>";
    }
}
else
{
    echo'<script>alert("Reference Number does not exist!")</script>'; 
}

?>

