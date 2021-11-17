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

    <link rel="stylesheet" href="addadminstyles.css">

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
              <li class="nav-item" style="font-weight: 800">
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
            <div class="col-md-12 col-sm-4 col-xs-12">

              <div class="form-container">

                <div id="admin_table">
                  
                </div>
               

                <div id="signupcard"> 
                  <h1 align="right" id="regheader">Register</h1>

                  <div id="textboxes"> <!--TEXTBOXES-->
                    <div id="names">
                      <div class="input-group" style="width: 48%; float: left; margin-right: 3%;">
                        <input type="text" class="form-control" id="firstname" placeholder="First Name">
                      </div>

                      <div class="input-group" style="width: 48%;" align="right">
                        <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                      </div>
                    </div>  

                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>

                    <div class="input-group" style="width: 48%; float: left; margin-right: 3%;">
                      <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>

                    <div class="input-group" style="width: 48%;" align="right">
                      <input type="password" class="form-control" id="password" placeholder="Password">
                  </div>

                    <div class="form-group input-group">
                      <select class="form-control" id="position">
                        <option selected disabled hidden> Position</option>
                        <option value="Barangay Captain">Barangay Captain</option>
                        <option value="Barangay Council">Barangay Council</option>
                        <option value="Barangay Staff">Barangay Staff</option>
                      </select>
                    </div>

                    <div>
                      <button class="btn btn-custom" type="submit" id="addAdmin">Add as Admin</button>   
                    </div>
                    <div><button type="submit" class="btn btn-custom" id="update">Save changes</button></div>
                  
                  </div>
                  
                </div>

              </div>

          </div>
      </div>

  <script src="jquery-3.5.1.slim.min.js"></script>
  <script src="ajax_libs_jquery_2.1.3_jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="display_admin.js"></script>
  <script src= "add_admin.js"></script>
 
  

  </body>
</html>


