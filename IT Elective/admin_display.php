<?php
include('./admin_table.php');

?>
 <div id="tablecont">
<?php
    echo "<div id='table-scroll'>
            <table class='table table-striped'>
                <thead>
                     <tr>
                     <th scope='col'>Actions</th>
                     <th scope='col'>Lastname</th>
                     <th scope='col'>Firstname</th>
                     <th scope='col'>Username</th>
                     <th scope='col'>E-mail</th>
                     <th scope='col'>Position</th>
                    </tr>
            </thead>";
                    

    $select = "SELECT * FROM admin_login";
    $result = @mysqli_query($con, $select);
if($result)
{
    while($row = mysqli_fetch_array($result))
    {
        if($row["username"] == "bryy")
        {
            continue;
        }
        else
        {
       echo"<tr>";
       echo"<td><div class='btn-group'><button type='button' class='btn btn-sm update' data-id='{$row["id"]}'><img src='update.png' alt='UPDATE' title='UPDATE'>
       </button><button type='button' id='{$row["username"]}' class='btn btn-sm del' data-id='{$row["username"]}'><img src='delete.png' alt='DELETE' title='DELETE'></button></div></td>";
       echo"<td>{$row['fname']}</td>";
       echo"<td>{$row['lname']}</td>";
       echo"<td>{$row['username']}</td>";
       echo"<td>{$row['email']}</td>";
       echo"<td>{$row['position']}</td>";
       echo"<td style='display: none;'>{$row['password']}</td>";
       echo"<td style='display: none;'>{$row['id']}</td>";
    }
    }
}
echo "</table>";
echo "</div>";
?>

</div>