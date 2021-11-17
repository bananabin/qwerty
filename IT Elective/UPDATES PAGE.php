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

    <link rel="stylesheet" href="updatesstyles.css">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- FONT -->

    <link href="googleapis.css" rel="stylesheet">
    
    <title>User Management - ADMIN</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: transparent;">
        <div class="container-fluid">
          <a class="navbar-brand" style="font-weight: 800; color: white;"></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="HOMEPAGE.php">HOME</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="USER MANAGEMENT PAGE.php">USER MANAGEMENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ADD ADMIN PAGE.php">ADD ADMIN</a>
                </li>
                <li class="nav-item" style="font-weight: 800">
                  <a class="nav-link" href="UPDATES PAGE.php">UPDATES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="session.php">LOGOUT</a>
                </li>
            </ul>
        </div>
      </nav>
          
    <div class="container" id="secnavbar">
      <div class="row">
          <div class="col-md-1 col-sm-4 col-xs-12"></div>
            <div class="col-md-12 col-sm-4 col-xs-12">
          
                <!-- Search form -->

                  <!--Remove arrows on text input number-->
                  <style>
                    input[type=number]::-webkit-inner-spin-button, 
                    input[type=number]::-webkit-outer-spin-button { 
                      -webkit-appearance: none; 
                      margin: 0; 
                      }
                  </style>

                  <div class="search">
                    <input type="number" class="searchTerm" id="txtInput" placeholder="Enter Reference Number">
                    <button type="button" class="searchButton" id="btnSeacrh">Search ID
                      <!-- <i class="fa fa-search"></i> -->
                    </button>
                  </div>
                <!--End  Search -->
                <div id="displayUser" class="mt-2 container" style="width: 50rem;">
                  
                </div>
                
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
          </div>
            
  </div>   


  <script src="jquery-3.5.1.slim.min.js"></script>
  <script src="ajax_libs_jquery_2.1.3_jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="update.js"></script>
  </body>
</html>


