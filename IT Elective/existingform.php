<?php
include('./contrace.php');


?>

<?php

    
    $id = $_POST['reference'];
                    
    
    $select = "SELECT * FROM trace_table2 WHERE ref_num = '$id'";
    $result = @mysqli_query($con, $select);
    $found = mysqli_num_rows($result);
if($found>0)
{
    while($row = mysqli_fetch_array($result))
    { 
        echo"<div class='form-row'>";
        echo"<div class='form-group col-md-6'><label class='mx-3' for='inputFirstName' >First Name:</label><input type='text' class='form-control rounded-pill' id='fName' value='{$row["fname"]}'></div>";
        echo"<div class='form-group col-md-6'><label class='mx-3' for='inputLastName'>Last Name:</label><input type='text' class='form-control rounded-pill' id='lName' value='{$row["lname"]}'></div>";
        echo"</div>";
        echo"<div class='form-group'>";
        echo"<label class='mx-3' for='inputAddress'>House Number, Street Name, Village/Barangay:</label><input type='text' class='form-control rounded-pill' id='barangay' value='{$row["street_barangay"]}'></div>";        
        echo"<div class='form-group'>";
        echo"<label class='mx-3' for='inputCity'>City/Municipality:</label><input type='text' class='form-control rounded-pill' id='city' value='{$row["city_municipality"]}'>";
        echo"</div>";
        echo"<div class='form-group'>";
        echo"<label class='mx-3' for='inputProvince'>Province:</label><input type='text' class='form-control rounded-pill' id='province' value='{$row["province"]}'>";
        echo"</div>";
        echo"<div class='form-group'>";
        echo"<label class='mx-3' for='inputContactNumber'>Mobile Number</label><input type='text' class='form-control rounded-pill' id='mNumber' value='{$row["mobile_number"]}'>";
        echo"</div>";
        echo"<div class='form-group'>";
        echo"<label class='mx-3' for='inputContactNumber'>Email Address</label><input type='email' class='form-control rounded-pill' id='email' value='{$row["email"]}'>";
        echo"</div>";
    }
}
else
{
    echo'<script>alert("Reference Number does not exist!")</script>'; 
    echo"<div class='form-row'>";
    echo"<div class='form-group col-md-6'><label class='mx-3' for='inputFirstName' >First Name:</label><input type='text' class='form-control rounded-pill' id='fName'></div>";
    echo"<div class='form-group col-md-6'><label class='mx-3' for='inputLastName'>Last Name:</label><input type='text' class='form-control rounded-pill' id='lName'></div>";
    echo"</div>";
    echo"<div class='form-group'>";
    echo"<label class='mx-3' for='inputAddress'>House Number, Street Name, Village/Barangay:</label><input type='text' class='form-control rounded-pill' id='barangay'></div>";        
    echo"<div class='form-group'>";
    echo"<label class='mx-3' for='inputCity'>City/Municipality:</label><input type='text' class='form-control rounded-pill' id='city'>";
    echo"</div>";
    echo"<div class='form-group'>";
    echo"<label class='mx-3' for='inputProvince'>Province:</label><input type='text' class='form-control rounded-pill' id='province'>";
    echo"</div>";
    echo"<div class='form-group'>";
    echo"<label class='mx-3' for='inputContactNumber'>Mobile Number</label><input type='text' class='form-control rounded-pill' id='mNumber'>";
    echo"</div>";
    echo"<div class='form-group'>";
    echo"<label class='mx-3' for='inputContactNumber'>Email Address</label><input type='email' class='form-control rounded-pill' id='email'>";
    echo"</div>";
}




?>