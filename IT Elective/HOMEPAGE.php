<?php
session_start();
if(!isset($_SESSION["login"]))

	header("location:LOGIN1.php"); 
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="homepagestyles.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="googleapis.css" rel="stylesheet">
    
    <title>Homepage - ADMIN</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: transparent;">
      <div class="container-fluid">
        <a class="navbar-brand" style="font-weight: 800; color: white;"></a>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item" style="font-weight: 800">
                  <a class="nav-link" href="HOMEPAGE.php">HOME</a>
              </li>
              <li class="nav-item" >
                  <a class="nav-link" href="USER MANAGEMENT PAGE.php">USER MANAGEMENT</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="ADD ADMIN PAGE.php">ADD ADMIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="UPDATES PAGE.php">UPDATES</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="session.php">LOGOUT</a>
              </li>
          </ul>
      </div>
    </nav>

      <div class="content"> 
        <img src="homeimage.jpg" alt="" class="homeimage" align="right">
        <span class="title1">_Contact Tracing</span>

        <span class="parag" align="right">  is the process of identifying, assessing, and managing people who have been exposed to a disease to prevent onward transmission. When systematically applied, contact tracing will break the chains of transmission of COVID-19 and is an essential public health tool for controlling the virus.</span>
      </div>


  </body>
</html>


