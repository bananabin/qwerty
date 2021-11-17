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

    
    <link rel="stylesheet" href="jquery-ui.css">
    <link rel="stylesheet" href="jquery-ui.structure.css">
    <link rel="stylesheet" href="jquery-ui.theme.css">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- FONT -->
    
    <link rel="stylesheet" href="usermanagementstyles.css">
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
              <li class="nav-item" style="font-weight: 800">
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


          
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-1 col-sm-4 col-xs-12"></div>
          <div class="col-md-12 col-sm-4 col-xs-12">
                <!--Form Start-->
                <form class="form-container">
                  
                  <!-- navbar -->
                  <nav class="navbar navbar-expand-lg" style="background-color: transparent;">
                    <div class="container-fluid">
                      <a class="navbar-brand" style="font-weight: 800; color: white;"></a>
              
                    <!-- Search form -->
                    <!--<div id="divstyle">
                      <p style="font-weight: bold;">Date: <input type="text" id="datepick" /></p>
                      </div> -->
                      <div class="search">
                        <input type="text" readonly class="searchTerm" placeholder="Search Date" id="datepick">
                        <button type="button" class="searchButton" id="btnSearch">
                          <img src="search24.png" alt="SEARCH">
                        </button>
                      </div>

                    <!--End  Search -->

                    <!-- Button Add/Print-->
                      <div>
                        <a href="Add Survey Form.html"><button class="btn btn-custom" type="button">Add</button></a>   
                        <button class="btn btn-custom" type="button" id="print">Print</button>
                      </div>
                    <!-- Button Add/Print-->

                    </div>
                  </nav>
                  
                <!-- TABLE!!!!! -->
                <div id="table"></div>
              
               


                </form>
                <!--Form End-->
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12"></div>
      </div>
  </div>   


  <script src="jquery-3.5.1.slim.min.js"></script>
  <script src="ajax_libs_jquery_2.1.3_jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="jquery-ui.js"></script>
  <script src="search.js"></script>
  <script src="user_display.js"></script>
  <script src="print.js"></script>
  <script type="text/javascript" src="printThis.js"></script>
  </body>
</html>


