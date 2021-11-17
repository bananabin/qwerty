<?php

require_once 'dbConfig.php'; 

$pname = $_POST['pname'];
//$small = $_POST['small'];
///$medium = $_POST['medium'];
//$large = $_POST['large'];
//$pprice= $_POST['pprice'];
$pstatus = $_POST['pstatus'];
$pprice= $_POST['price'];
 $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
 $query = "INSERT into product_table2 (product_name, image, price, status) VALUES ('$pname', '$file', $pprice, '$pstatus')";
 
 //$query = "INSERT into product_table1 (product_name, image, size_small, size_medium, size_large, status) VALUES ('$pname', '$file', $small, $medium, $large, '$pstatus')";
 if(mysqli_query($db, $query))
 {
  echo 'Image Inserted into Database';
 }

?>